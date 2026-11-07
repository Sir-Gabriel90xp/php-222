<?php
require __DIR__ . '/includes/datos.php';

$titulo = 'Doctores';
$activa = 'doctores';

include __DIR__ . '/includes/header.php';
?>

<h1 class="h3 mb-4">Nuestros Doctores</h1>

<div class="row g-4">
    <?php foreach ($doctores as $d): ?>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card h-100 text-center">
                <div class="card-body">
                    <div class="doctor-avatar mx-auto mb-3"><i class="bi bi-person-fill"></i></div>
                    <h2 class="h5"><?= htmlspecialchars($d['nombre']) ?></h2>
                    <span class="badge bg-primary mb-3"><?= htmlspecialchars($d['especialidad']) ?></span>
                    <p class="small text-muted mb-1"><i class="bi bi-clock me-1"></i><?= htmlspecialchars($d['horario']) ?></p>
                    <p class="small text-muted"><i class="bi bi-telephone me-1"></i><?= htmlspecialchars($d['telefono']) ?></p>
                    <a href="citas.php" class="btn btn-outline-primary btn-sm">Agendar cita</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
