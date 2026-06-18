@extends('app')

@section('title', 'Aviso Legal | Separafilt')
@section('meta_description',
    'Aviso Legal para obtener información sobre cómo se gestionan los datos personales
    recabados en este sitio web.')
@section('robots_meta', 'index,follow')
@section('og_title', 'Aviso Legal | Separafilt')
@section('og_description',
    'Aviso Legal para obtener información sobre cómo se gestionan los datos personales
    recabados en este sitio web.')
@section('twitter_title', 'Política de Privacidad | Separafilt')
@section('twitter_description', 'Aviso Legal para obtener información sobre cómo se gestionan los datos personales
    recabados en este sitio web.')

@section('content')
    <main class="container legal-page">
        <section class="legal-hero">
            <h1>Aviso Legal</h1>
            <p>
                Informacion general sobre titularidad del sitio, condiciones de uso y limitacion de responsabilidad.
            </p>
        </section>

        <section class="legal-section legal-card">
            <h2>1. Titularidad del sitio web</h2>
            <p>
                Este sitio web es titularidad de <strong>SeparaFilt</strong>.
                Para cualquier consulta, puede utilizar el formulario de contacto disponible en la web.
            </p>

            <h2>2. Objeto</h2>
            <p>
                El presente aviso regula el acceso, navegacion y uso del sitio web, asi como las responsabilidades derivadas
                de la utilizacion de sus contenidos (textos, imagenes, diseno, codigo fuente y otros elementos).
            </p>

            <h2>3. Condiciones de uso</h2>
            <p>
                La persona usuaria se compromete a realizar un uso adecuado del sitio web y de sus contenidos,
                de conformidad con la ley, la buena fe y el presente aviso legal.
            </p>

            <h2>4. Propiedad intelectual e industrial</h2>
            <p>
                Los contenidos de esta web son titularidad de SeparaFilt o de terceros autorizados.
                Queda prohibida la reproduccion, distribucion o comunicacion publica, total o parcial,
                sin autorizacion previa y expresa.
            </p>

            <h2>5. Enlaces externos</h2>
            <p>
                Este sitio puede contener enlaces a paginas de terceros. SeparaFilt no se responsabiliza de los contenidos,
                politicas o practicas de dichos sitios externos.
            </p>

            <h2>6. Limitacion de responsabilidad</h2>
            <p>
                SeparaFilt no garantiza la disponibilidad continua del sitio web ni la ausencia de errores,
                aunque adopta medidas razonables para su correcto funcionamiento.
            </p>

            <h2>7. Legislacion aplicable</h2>
            <p>
                Este aviso legal se rige por la normativa espanola y de la Union Europea aplicable.
            </p>
        </section>
    </main>
@endsection
