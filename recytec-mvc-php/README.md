# Recytec MVC PHP

Proyecto MVC ligero en PHP inspirado en la experiencia de Recicladora EcoGreen Perú. Incluye rutas limpias, layout profesional y formulario de contacto con almacenamiento en MySQL.

## Estructura
```
recytec-mvc-php/
├─ app/
│  ├─ controllers/
│  │  ├─ HomeController.php
│  │  ├─ ServiciosController.php
│  │  ├─ ProcesoController.php
│  │  └─ ContactoController.php
│  ├─ models/
│  │  └─ Contacto.php
│  └─ views/
│     ├─ layouts/main.php
│     ├─ partials/{nav.php, footer.php}
│     ├─ home/index.php
│     ├─ servicios/index.php
│     ├─ proceso/index.php
│     └─ contacto/index.php
├─ core/
│  ├─ Router.php
│  ├─ Controller.php
│  ├─ Model.php
│  └─ Database.php
├─ public/
│  ├─ index.php
│  ├─ .htaccess
│  └─ assets/
│     ├─ css/style.css
│     └─ img/
│        ├─ logo.png
│        ├─ logo-footer.png
│        ├─ hero-background.jpg
│        ├─ hero-team.png
│        ├─ banner-industrial.jpg
│        ├─ icon-certificate.svg
│        ├─ icon-map.svg
│        ├─ icon-recoleccion.svg
│        ├─ icon-destruccion.svg
│        ├─ icon-economia-circular.svg
│        ├─ icon-transporte.svg
│        ├─ icon-plant.svg
│        ├─ icon-document.svg
│        ├─ icon-training.svg
│        ├─ icon-report.svg
│        ├─ icon-innovation.svg
│        ├─ icon-phone.svg
│        ├─ icon-mail.svg
│        ├─ icon-location.svg
│        ├─ icon-facebook.svg
│        ├─ icon-linkedin.svg
│        └─ icon-instagram.svg
├─ config/config.php
├─ storage/logs/
├─ database.sql
└─ README.md
```

> 📝 Todos los archivos listados en `public/assets/img/` son referencias. Súbelos al hosting con las imágenes finales manteniendo exactamente los mismos nombres para que se muestren en el sitio.

## Requisitos
- PHP 8.1+
- Extensión PDO MySQL habilitada
- Servidor Apache con mod_rewrite (para `.htaccess`)
- MySQL 5.7+ o MariaDB 10+

## Instalación
1. **Clonar o subir** el directorio `recytec-mvc-php` a tu hosting.
2. **Crear base de datos**:
   - En cPanel → *MySQL® Databases* crea la base de datos (ej. `recytec`).
   - Crea un usuario y otórgale *All Privileges* sobre la base.
   - En phpMyAdmin importa el archivo `database.sql` para generar la tabla `contactos`.
3. **Configurar conexión**:
   - Edita `config/config.php` y actualiza `host`, `name`, `user` y `pass` con tus credenciales.
   - Si el proyecto quedará en una subcarpeta (ej. `midominio.com/recytec`), cambia `base_url` a `/recytec`.
4. **Publicar en hosting**:
   - Si tu hosting apunta a `public_html/`, mueve el contenido de `public/` al `public_html/`.
   - Mantén las carpetas `app/`, `core/`, `config/`, `storage/` y `database.sql` fuera del público (un nivel arriba).
   - Verifica que `.htaccess` esté en la raíz pública para activar las URLs amigables.
   - Si se publica en una subcarpeta (ej. `/recytec`), edita la línea `RewriteBase /` del `.htaccess` a `RewriteBase /recytec/`.
5. **Probar rutas**:
   - `/` → Inicio.
   - `/servicios`
   - `/proceso`
   - `/contacto` (el formulario envía datos por POST a `/contacto/enviar` y los guarda en la tabla `contactos`).

## Personalización rápida
- **Marca y textos**: editar `app/views/partials/nav.php`, `app/views/partials/footer.php` y cada vista en `app/views/*`.
- **Colores y estilos**: `public/assets/css/style.css` (variables `--pri`, `--acc`, etc.).
- **Imágenes**: reemplaza los archivos en `public/assets/img/` respetando los nombres listados.
- **Teléfono y WhatsApp**: en `footer.php` y `contacto/index.php` el número por defecto es `+51 974 952 152`.

## Extensiones sugeridas
- **Envío de email SMTP**: se puede integrar añadiendo PHPMailer y configurando credenciales en `config/config.php`.
- **Landing temporal**: crea una vista en `app/views/home/maintenance.php` y apúntala desde `HomeController`.
- **CRUD de lotes/retiros**: agrega modelos y controladores adicionales basados en la estructura actual.

## Logs
La carpeta `storage/logs/` queda disponible para futuras integraciones (ej. escribir logs de errores o actividades).

---
Proyecto construido para ofrecer una base profesional, modular y fácil de desplegar para empresas recicladoras y de gestión ambiental.
