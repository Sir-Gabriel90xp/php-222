<?php
$titulo = 'Contacto';
$activa = 'contacto';

$enviado = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre  = trim($_POST['nombre'] ?? '');
    $correo  = trim($_POST['correo'] ?? '');
    $mensaje = trim($_POST['mensaje'] ?? '');
    $enviado = $nombre && filter_var($correo, FILTER_VALIDATE_EMAIL) && $mensaje;
}

include __DIR__ . '/includes/header.php';
?>

<h1 class="h3 mb-4">Contacto</h1>

<?php if ($enviado): ?>
    <div class="alert alert-success">¡Gracias, <?= htmlspecialchars($nombre) ?>! Hemos recibido tu mensaje.</div>
<?php endif; ?>

<div class="row g-4">
    <div class="col-12 col-lg-7">
        <div class="card"><div class="card-body">
            <form method="post" action="contacto.php">
                <div class="mb-3">
                    <label class="form-label" for="nombre">Nombre</label>
                    <input class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="correo">Correo electrónico</label>
                    <input type="email" class="form-control" id="correo" name="correo" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="mensaje">Mensaje</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
                </div>
                <button class="btn btn-primary" type="submit"><i class="bi bi-send me-1"></i> Enviar</button>
            </form>
        </div></div>
    </div>
    <div class="col-12 col-lg-5">
        <div class="card"><div class="card-body">
            <h2 class="h5">Centro Médico</h2>
            <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Calle Principal #123, Ciudad</p>
            <p class="mb-2"><i class="bi bi-telephone text-primary me-2"></i>809-555-0100</p>
            <p class="mb-2"><i class="bi bi-envelope text-primary me-2"></i>contacto@citasmedicas.test</p>
            <p class="mb-0"><i class="bi bi-clock text-primary me-2"></i>Lun - Vie, 7:00 - 17:00</p>
        </div></div>
    </div>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
