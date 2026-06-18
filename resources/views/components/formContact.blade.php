<form action="https://formspree.io/f/xmoxozgj" method="POST">

        @csrf
        <h2>Contactanos</h2>
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" placeholder="Nombre" required>
        </div>
        <div class="form-group">
            <label for="subject">Asunto</label>
            <input type="text" name="subject" id="subject" placeholder="Asunto" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="_replyto" id="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="message">Mensaje</label>
            <textarea name="message" id="message" placeholder="Mensaje" required></textarea>
        </div>
        <div class="form-group">
            <label for="checkbox">
                <input type="checkbox" name="privacy_consent" id="checkbox" value="1" required>
                <span>He leido y acepto la <a href="{{ route('legal.privacidad') }}">Politica de Privacidad</a> y el <a href="{{ route('legal.aviso') }}">Aviso Legal</a>.</span>
            </label>
        </div>
        <button type="submit">Enviar</button>
    </form>