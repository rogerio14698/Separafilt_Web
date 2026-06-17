
@extends('app')

@section('title', $pageTitle ?? ('Contacto | Separafilt | Separación de partículas y filtración industrial ' . config('seo.cauntry')))

@section('meta_description', $pageMetaDescription ?? ('Diseño, fabricación y comercialización de equipos industriales de separación y filtración de partículas en ' . config('seo.city') . '. Especialistas en separadores de sólidos en líquidos y gases.'))

@section('robots_meta', $robotsMeta ?? 'index,follow')

@section('og_title', $pageTitle ?? ('Separafilt | Equipos de filtración industrial en ' . config('seo.city')))

@section('og_description', $pageMetaDescription ?? ('Especialistas en sistemas de separación de partículas sólidas y filtrado industrial para líquidos y gases en ' . config('seo.region') . '. Conoce nuestra gama de productos.'))

@section('twitter_title', $pageTitle ?? ('Separafilt | Filtración industrial y separación de partículas'))

@section('twitter_description', $pageMetaDescription ?? ('Soluciones avanzadas en filtración de partículas y separación de sólidos para la industria en ' . config('seo.city') . '.'))

@section('content')
    @include('components.form')
@endsection