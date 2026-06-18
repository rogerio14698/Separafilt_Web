
@extends('app')

@section('title', $pageTitle ?? ($product['name'] . ' | Separafilt | Soluciones industriales'))

@section('meta_description', $pageMetaDescription ?? ($product['summary'] . ' Especialistas en separacion y filtracion industrial en ' . config('seo.city') . '.'))

@section('robots_meta', $robotsMeta ?? 'index,follow')

@section('og_title', $pageTitle ?? ($product['name'] . ' | Separafilt'))

@section('og_description', $pageMetaDescription ?? ($product['summary'] . ' Consulte ficha tecnica y aplicaciones.'))

@section('twitter_title', $pageTitle ?? ($product['name'] . ' | Separafilt'))

@section('twitter_description', $pageMetaDescription ?? ($product['summary'] . ' Contacte para asesoramiento tecnico.'))

@section('content')
<main class="container product-detail-page">
	<section class="product-detail-hero">
		<a href="{{ $product['category'] === 'filtracion' ? route('filtracion') : route('separacion') }}" class="back-link">Volver a catalogo</a>
		<h1>{{ $product['name'] }}</h1>
		<p>{{ $product['spec'] }}</p>
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
				@foreach($product['features'] as $feature)
					<li>{{ $feature }}</li>
				@endforeach
			</ul>

			<h3>Aplicaciones recomendadas</h3>
			<ul>
				@foreach($product['applications'] as $application)
					<li>{{ $application }}</li>
				@endforeach
			</ul>

			<a href="{{ route('contacto') }}" class="btn-catalog">Solicitar Información</a>
		</article>
	</section>
</main>
@endsection