<section class="section hero" style="padding-top: 4rem; padding-bottom: 4rem;">
    <div class="hero__content" style="grid-template-columns: 1fr;">
        <div class="hero__copy">
            <h1>Conversemos sobre la gestión de tus residuos</h1>
            <p>Agenda una evaluación gratuita y recibe un plan de acción adaptado a tu operación. Atendemos Lima y provincias.</p>
        </div>
    </div>
</section>

<section class="section section--gray">
    <div class="section__inner contact">
        <div class="contact__info">
            <div class="section__header" style="text-align:left;">
                <h2>Datos de contacto</h2>
                <p>Respondemos en menos de 2 horas hábiles. También puedes escribirnos por WhatsApp o correo.</p>
            </div>
            <div class="contact__info-item">
                <img src="<?= rtrim(BASE_URL, '/') ?>/assets/img/icon-phone.svg" alt="Teléfono">
                <div>
                    <strong>Llámanos</strong>
                    <p><a href="tel:+51974952152">+51 974 952 152</a></p>
                </div>
            </div>
            <div class="contact__info-item">
                <img src="<?= rtrim(BASE_URL, '/') ?>/assets/img/icon-mail.svg" alt="Correo">
                <div>
                    <strong>Correo corporativo</strong>
                    <p><a href="mailto:comercial@recicladoraecogreenperu.com">comercial@recicladoraecogreenperu.com</a></p>
                </div>
            </div>
            <div class="contact__info-item">
                <img src="<?= rtrim(BASE_URL, '/') ?>/assets/img/icon-location.svg" alt="Ubicación">
                <div>
                    <strong>Base operativa</strong>
                    <p>Av. Alfredo Mendiola 680, Independencia, Lima - Perú</p>
                </div>
            </div>
        </div>
        <form class="form" method="POST" action="<?= rtrim(BASE_URL, '/') ?>/contacto/enviar">
            <h2>Formulario de contacto</h2>
            <?php if (!empty($success)): ?>
                <div class="alert alert--success">Gracias por escribirnos. Nuestro equipo te contactará muy pronto.</div>
            <?php endif; ?>
            <?php if (!empty($_SESSION['form_error'])): ?>
                <div class="alert alert--error"><?= $_SESSION['form_error'] ?></div>
                <?php unset($_SESSION['form_error']); ?>
            <?php endif; ?>
            <div class="form__group">
                <label for="nombre">Nombre y apellido *</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form__group">
                <label for="empresa">Empresa</label>
                <input type="text" id="empresa" name="empresa">
            </div>
            <div class="form__group">
                <label for="telefono">Teléfono *</label>
                <input type="tel" id="telefono" name="telefono" required>
            </div>
            <div class="form__group">
                <label for="email">Correo electrónico *</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form__group">
                <label for="mensaje">¿Cómo podemos ayudarte? *</label>
                <textarea id="mensaje" name="mensaje" required></textarea>
            </div>
            <button class="btn btn--primary" type="submit">Enviar mensaje</button>
            <small>Al enviar aceptas nuestra política de protección de datos personales.</small>
        </form>
    </div>
</section>
