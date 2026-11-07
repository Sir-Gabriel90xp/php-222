# Citas Médicas – Práctica PHP con Bootstrap

Dashboard de **Citas Médicas** hecho con PHP y Bootstrap 5 (por CDN, no requiere instalar nada).

## Estructura

```
practica1/
├── index.php        Dashboard
├── citas.php        Listado y formulario de citas
├── doctores.php     Doctores
├── pacientes.php    Pacientes
├── contacto.php     Formulario de contacto
├── includes/
│   ├── header.php   Cabecera + menú lateral (se reutiliza)
│   ├── footer.php   Pie de página
│   └── datos.php    Datos de ejemplo
├── css/styles.css
├── js/scripts.js
├── img/logo.svg
├── Dockerfile       Para hostings con Docker (Render, Railway...)
└── README.md
```

## 1. Ejecutar en local

### Opción A – Laragon (la de la práctica)
1. Copia la carpeta `practica1` dentro de `C:\laragon\www\`.
2. Inicia Laragon (**Start All**).
3. Abre `http://localhost/practica1/` o `http://practica1.test`.

### Opción B – VS Code con PHP instalado
1. Abre la carpeta en VS Code: **Archivo → Abrir carpeta → practica1**.
2. En la terminal integrada (`Ctrl + ñ`):
   ```bash
   php -S localhost:8000
   ```
3. Abre `http://localhost:8000`.

> Si usas Laragon, el PHP ya viene incluido en `C:\laragon\bin\php\...`.

## 2. Subir a GitHub

1. Crea un repositorio vacío en https://github.com/new (por ejemplo `citas-medicas`), sin README.
2. En la terminal, dentro de la carpeta del proyecto:
   ```bash
   git init
   git add .
   git commit -m "Primer commit: dashboard Citas Médicas en PHP"
   git branch -M main
   git remote add origin https://github.com/TU_USUARIO/citas-medicas.git
   git push -u origin main
   ```

## 3. Subir a un hosting

### Opción A – Hosting PHP gratuito (InfinityFree, etc.)
1. Crea una cuenta y un sitio nuevo.
2. Entra al **Administrador de archivos** (o usa FileZilla con los datos FTP).
3. Sube **todo el contenido** de `practica1` dentro de la carpeta `htdocs` (o `public_html`).
4. Abre tu dominio: debe cargar `index.php`.

### Opción B – Render (desde GitHub, usa el Dockerfile)
1. Sube el proyecto a GitHub (paso 2).
2. En https://render.com → **New → Web Service** → conecta tu repositorio.
3. Render detecta el `Dockerfile` automáticamente. Elige el plan gratuito y despliega.
4. Cuando termine te da un enlace público.

### Opción C – Replit / CodeSandbox
Importa el repositorio desde GitHub y ejecuta `php -S 0.0.0.0:8000`.

## Si no cargan estilos o imágenes
- Usa rutas **relativas** (`css/styles.css`, `img/logo.svg`), nunca rutas como `C:/laragon/www/...`.
- Revisa la consola del navegador (F12 → Network) en busca de errores 404.
- Los estilos de Bootstrap vienen de un CDN: se necesita conexión a internet.
