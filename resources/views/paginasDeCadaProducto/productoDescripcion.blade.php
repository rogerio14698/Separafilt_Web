@extends('app')

@section('title', $pageTitle ?? $product['name'] . ' | Separafilt | Soluciones industriales')

@section('meta_description',
    $pageMetaDescription ??
    $product['summary'] .
    ' Especialistas en separacion y filtracion
    industrial en ' .
    config('seo.city') .
    '.')

@section('robots_meta', $robotsMeta ?? 'index,follow')

@section('og_title', $pageTitle ?? $product['name'] . ' | Separafilt')

@section('og_description', $pageMetaDescription ?? $product['summary'] . ' Consulte ficha tecnica y aplicaciones.')

@section('twitter_title', $pageTitle ?? $product['name'] . ' | Separafilt')

@section('twitter_description', $pageMetaDescription ?? $product['summary'] . ' Contacte para asesoramiento tecnico.')

@section('content')
    <main class="container product-detail-page">
        <section class="product-detail-hero">
            <a href="{{ $product['category'] === 'filtracion' ? route('filtracion') : route('separacion') }}"
                class="back-link">Volver a catalogo</a>
            <h1>{{ $product['name'] }}</h1>
        </section>

        <section class="product-detail-content">
            <div class="product-detail-image">
                <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}">
            </div>

            <article class="product-detail-info">
                <h2>Descripcion del producto</h2>
                <p>{{ $product['description'] }}</p>

                <h3>Caracteristicas tecnicas</h3>
                <ul>
                    @foreach ($product['features'] as $feature)
                        <li>{{ $feature }}</li>
                    @endforeach
                </ul>

                <h3>Aplicaciones recomendadas</h3>
                <ul>
                    @foreach ($product['applications'] as $application)
                        <li>{{ $application }}</li>
                    @endforeach
                </ul>
                <h3>Especificaciones</h3>
                <ul>
                    @foreach ($product['spec'] as $key => $value)
                        <li><strong>{{ ucfirst(str_replace('_', ' ', $key)) }}:</strong> {{ $value }}</li>
                    @endforeach
                </ul>

                <a href="{{ route('contacto') }}" class="btn-catalog">Solicitar Información</a>
            </article>
            <div class="card_destaque">
                @php
                    //Aqui vamos a generar una pocas rutas para los logos de cada interacción del foreach
                    $iconos = [
                        'tiempo' => 'fas fa-clock', //un reloj
                        'mantenimiento' => 'fas fa-tools', //una llave inglesa
                        'lavado' => 'fas fa-tint', //una gota de agua
						'rentabilidad' => 'fas fa-dollar-sign', //un signo de dolar
                    ];
                @endphp

                <ul>
                    @foreach ($product['destaque'] as $key => $value)
                        <li><i class="{{ $iconos[$key] ?? '' }}"></i>
                            <strong>{{ ucfirst(str_replace('_', ' ', $key)) }}:</strong> {{ $value }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        @php
            $videoUrl = $product['url_video_youtube'] ?? '';
            $youtubeEmbedUrl = '';

            if (!empty($videoUrl)) {
                $parts = parse_url($videoUrl);
                $host = strtolower($parts['host'] ?? '');
                $path = $parts['path'] ?? '';
                $query = $parts['query'] ?? '';

                if (str_contains($host, 'youtu.be')) {
                    $videoId = trim($path, '/');
                    if ($videoId !== '') {
                        $youtubeEmbedUrl = 'https://www.youtube.com/embed/' . $videoId;
                    }
                } elseif (str_contains($host, 'youtube.com')) {
                    if (str_starts_with($path, '/embed/')) {
                        $youtubeEmbedUrl = $videoUrl;
                    } elseif (str_starts_with($path, '/shorts/')) {
                        $videoId = trim(str_replace('/shorts/', '', $path), '/');
                        if ($videoId !== '') {
                            $youtubeEmbedUrl = 'https://www.youtube.com/embed/' . $videoId;
                        }
                    } else {
                        parse_str($query, $params);
                        if (!empty($params['v'])) {
                            $youtubeEmbedUrl = 'https://www.youtube.com/embed/' . $params['v'];
                        }
                    }
                }
            }
        @endphp
        @if (!empty($youtubeEmbedUrl))
            <section class="product-detail-video">
                <h2>Video del producto</h2>
                <div class="video-container">
                    <iframe src="{{ $youtubeEmbedUrl }}" title="Video del producto {{ $product['name'] }}" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>
                {{-- Quitamos esa sección ya que queda mejor no mostrar nada a que no tenga un video --}}
            </section>
        @endif


        @php
            $dimensionImages = $product['dimensiones_img'] ?? [];
            if (!is_array($dimensionImages)) {
                $dimensionImages = [$dimensionImages];
            }
            $dimensionImages = array_values(array_filter($dimensionImages));
        @endphp
        @if (!empty($dimensionImages))
            <section class="product-detail-dimensions">
                <h2>Dimensiones {{ $product['name'] }}</h2>
                <div class="dimensions-image">
                    @foreach ($dimensionImages as $img)
                        <img src="{{ asset($img) }}" alt="Dimensiones {{ $product['name'] }}">
                    @endforeach
                </div>
            </section>
        @endif


        <section>
            <h2>Accesorios Relacionados</h2>

            <p>Aqui como he visto que tiene accesorios en Lakos, se puede hacer una biblioteca con img y una breve
                descripcion de los accesorios relacionados con ese producto.</p>


        </section>
    </main>
@endsection
