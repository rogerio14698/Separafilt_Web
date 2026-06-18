@extends('app')

@section('title', 'Política de Privacidad | Separafilt')
@section('meta_description',
    'Política de Privacidad para obtener información sobre cómo se gestionan los datos personales
    recabados en este sitio web.')
@section('robots_meta', 'index,follow')
@section('og_title', 'Política de Privacidad | Separafilt')
@section('og_description',
    'Política de Privacidad para obtener información sobre cómo se gestionan los datos personales
    recabados en este sitio web.')
@section('twitter_title', 'Política de Privacidad | Separafilt')
@section('twitter_description',
    'Política de Privacidad para obtener información sobre cómo se gestionan los datos personales
    recabados en este sitio web.')

@section('content')
    <main class="container legal-page">
        <section class="legal-hero">
            <h1>Politica de Privacidad</h1>
            <p>
                En esta pagina se explica como tratamos los datos personales conforme al Reglamento (UE) 2016/679 (RGPD)
                y la Ley Organica 3/2018 (LOPDGDD).
            </p>
        </section>

        <section class="legal-section legal-card">
            <h2>1. Responsable del tratamiento</h2>
            <p>
                El responsable del tratamiento es <strong>SeparaFilt</strong>, titular de este sitio web.
                Para cualquier consulta sobre privacidad puede contactar a traves del formulario de contacto.
            </p>

            <h2>2. Datos que tratamos</h2>
            <p>
                Tratamos exclusivamente los datos que usted facilita voluntariamente en el formulario de contacto:
                nombre, correo electronico, asunto y mensaje.
            </p>

            <h2>3. Finalidad y base juridica</h2>
            <p>
                La finalidad es atender consultas comerciales o tecnicas y gestionar el contacto solicitado.
                La base juridica es su <strong>consentimiento</strong> (art. 6.1.a RGPD), otorgado al marcar la casilla
                de aceptacion antes de enviar el formulario.
            </p>

            <h2>4. Conservacion de los datos</h2>
            <p>
                Conservamos los datos durante el tiempo necesario para responder a su solicitud y, en su caso,
                durante los plazos legales aplicables.
            </p>

            <h2>5. Destinatarios y encargados</h2>
            <p>
                No vendemos ni cedemos sus datos a terceros, salvo obligacion legal.
                Para la gestion tecnica del formulario utilizamos un proveedor de terceros (Formspree), que actua
                como encargado del tratamiento segun sus propias condiciones de privacidad.
            </p>

            <h2>6. Derechos de las personas usuarias</h2>
            <p>
                Puede ejercer los derechos de acceso, rectificacion, supresion, oposicion, limitacion del tratamiento
                y portabilidad cuando proceda. Tambien puede retirar su consentimiento en cualquier momento,
                sin efectos retroactivos.
            </p>

            <h2>7. Reclamaciones</h2>
            <p>
                Si considera que sus derechos no han sido atendidos correctamente, puede presentar reclamacion ante la
                Agencia Espanola de Proteccion de Datos (AEPD): <a href="https://www.aepd.es" target="_blank" rel="noopener noreferrer">www.aepd.es</a>.
            </p>

            <h2>8. Actualizaciones</h2>
            <p>
                Esta politica puede actualizarse para adaptarse a cambios normativos o tecnicos.
            </p>
        </section>
    </main>

@endsection
