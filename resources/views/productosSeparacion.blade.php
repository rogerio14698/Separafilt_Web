
@extends('app')

@section('title', $pageTitle ?? ('Separafilt | Separación de partículas y filtración industrial ' . config('seo.cauntry')))

@section('meta_description', $pageMetaDescription ?? ('Diseño, fabricación y comercialización de equipos industriales de separación y filtración de partículas en ' . config('seo.city') . '. Especialistas en separadores de sólidos en líquidos y gases.'))

@section('robots_meta', $robotsMeta ?? 'index,follow')

@section('og_title', $pageTitle ?? ('Separafilt | Equipos de filtración industrial en ' . config('seo.city')))

@section('og_description', $pageMetaDescription ?? ('Especialistas en sistemas de separación de partículas sólidas y filtrado industrial para líquidos y gases en ' . config('seo.region') . '. Conoce nuestra gama de productos.'))

@section('twitter_title', $pageTitle ?? ('Separafilt | Filtración industrial y separación de partículas'))

@section('twitter_description', $pageMetaDescription ?? ('Soluciones avanzadas en filtración de partículas y separación de sólidos para la industria en ' . config('seo.city') . '.'))

@section('content')
<main class="container catalog-page">
    <section class="catalog-hero">
        <h1>Productos de Separación</h1>
        <p>Equipos especializados en separacion de particulas solidas en liquidos y gases. Tecnologia orientada a procesos industriales con alta eficiencia y estabilidad.</p>
    </section>

    <section class="catalog-content">
        <div class="catalog-grid">
            @foreach($products as $slug => $product)
                <article class="product-catalog-card">
                    <div class="product-catalog-img">
                        <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}">
                    </div>

                    <div class="product-catalog-info">
                        <h3>{{ $product['name'] }}</h3>
                        <p class="product-spec">{{ $product['spec'] }}</p>
                        <p>{{ $product['summary'] }}</p>

                        <ul class="product-features">
                            @foreach($product['features'] as $feature)
                                <li>{{ $feature }}</li>
                            @endforeach
                        </ul>

                        <a href="{{ route('producto.show', ['slug' => $slug]) }}" target="_blank" rel="noopener noreferrer" class="btn-catalog">Ver ficha tecnica</a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
</main>
@endsection
