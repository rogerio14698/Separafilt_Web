<section class="container contactForm">


    <div class="contactoHorario">
        <h1>Horario de Atención</h1>
        <hr>
        <span>Lisboa, 10 * 28232 | Las Rozas (Madrid)</span>
        <span>Lun - Juev  | 9:00AM - 5:30PM</span>
        <span>Viernes | 9:00AM - 3:000PM</span>
        <span>Sáb - Dom | Cerrado</span>

        <hr>

        <h1>Contacto</h1>
        <span>Teléfono: +34 656 22 22 22</span>
        <span>Email: info@separafilt.com</span>
    </div>



    <h1>Contacto</h1>
    <p>Si tiene alguna pregunta o comentario, no dude en enviarnos un correo electrónico a
        <a href="mailto:info@separafilt.com">info@separafilt.com</a>
    </p>


    <form action="https://formspree.io/f/xmoxozgj" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" placeholder="Nombre" required>
        </div>
         <div class="form-group">
            <label for="name">Asunto</label>
            <input type="text" name="name" id="name" placeholder="Nombre" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="_replyto" id="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="message">Mensaje</label>
            <textarea name="message" id="message" placeholder="Mensaje" required></textarea>
        </div>
        <button type="submit">Enviar</button>
    </form>

</section>
