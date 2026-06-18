
@extends('app')

@section('title', $pageTitle ?? ('Contacto | Separafilt | Separación de partículas y filtración industrial ' . config('seo.cauntry')))

@section('meta_description', $pageMetaDescription ?? ('Diseño, fabricación y comercialización de equipos industriales de separación y filtración de partículas en ' . config('seo.city') . '. Especialistas en separadores de sólidos en líquidos y gases.'))

@section('robots_meta', $robotsMeta ?? 'index,follow')

@section('og_title', $pageTitle ?? ('Separafilt | Equipos de filtración industrial en ' . config('seo.city')))

@section('og_description', $pageMetaDescription ?? ('Especialistas en sistemas de separación de partículas sólidas y filtrado industrial para líquidos y gases en ' . config('seo.region') . '. Conoce nuestra gama de productos.'))

@section('twitter_title', $pageTitle ?? ('Separafilt | Filtración industrial y separación de partículas'))

@section('twitter_description', $pageMetaDescription ?? ('Soluciones avanzadas en filtración de partículas y separación de sólidos para la industria en ' . config('seo.city') . '.'))

@section('content')
<main class="container contact-page">
    <!-- Hero Section -->
    <section class="contact-hero">
        <h1>Contacto</h1>
        <p>¿Tiene alguna pregunta sobre nuestros equipos de separación y filtración? Nuestro equipo está listo para ayudarle. Complete el formulario a continuación y nos pondremos en contacto con usted en la mayor brevedad posible.</p>
    </section>

    <!-- Contenido principal -->
    <section class="contact-content">
        <div class="contact-info">
            <h2>Información de Contacto</h2>
            
            <div class="info-block">
                <h3>Oficina </h3>
                <p>Lisboa, 10 - P.E. Európolis</p>
                <p>28232 Las Rozas (Madrid)</p>
            </div>

            <div class="info-block">
                <h3>Teléfono</h3>
                <p><a href="tel:+34656222222">+34 656 22 22 22</a></p>
            </div>

            <div class="info-block">
                <h3>Correo Electrónico</h3>
                <p><a href="mailto:info@separafilt.com">info@separafilt.com</a></p>
            </div>

            <div class="info-block">
                <h3>Horario de Atención</h3>
                <p><strong>Lunes - Jueves:</strong> 9:00 AM - 5:30 PM</p>
                <p><strong>Viernes:</strong> 9:00 AM - 3:00 PM</p>
                <p><strong>Sábado - Domingo:</strong> Cerrado</p>
            </div>
        </div>

        <div class="contact-form-wrapper">
            @include('components.formContact')
        </div>
    </section>
</main>
@endsection