<?php
require __DIR__ . '/includes/datos.php';

$titulo = 'Dashboard';
$activa = 'index';

$confirmadas = count(array_filter($citas, fn($c) => $c['estado'] === 'Confirmada'));
$pendientes  = count(array_filter($citas, fn($c) => $c['estado'] === 'Pendiente'));

include __DIR__ . '/includes/header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h1 class="h3 mb-0">Dashboard de Citas Médicas</h1>
        <small class="text-muted">Resumen general del consultorio</small>
    </div>
    <a href="citas.php" class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i> Nueva cita</a>
</div>

<div class="row g-3 mb-4">
    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card stat-card"><div class="card-body d-flex justify-content-between align-items-center">
            <div><div class="text-muted small">Citas totales</div><div class="h2 mb-0"><?= count($citas) ?></div></div>
            <i class="bi bi-calendar-check icono text-primary"></i>
        </div></div>
    </div>
    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card stat-card"><div class="card-body d-flex justify-content-between align-items-center">
            <div><div class="text-muted small">Confirmadas</div><div class="h2 mb-0"><?= $confirmadas ?></div></div>
            <i class="bi bi-check-circle icono text-success"></i>
        </div></div>
    </div>
    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card stat-card"><div class="card-body d-flex justify-content-between align-items-center">
            <div><div class="text-muted small">Pendientes</div><div class="h2 mb-0"><?= $pendientes ?></div></div>
            <i class="bi bi-hourglass-split icono text-warning"></i>
        </div></div>
    </div>
    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card stat-card"><div class="card-body d-flex justify-content-between align-items-center">
            <div><div class="text-muted small">Doctores</div><div class="h2 mb-0"><?= count($doctores) ?></div></div>
            <i class="bi bi-person-badge icono text-info"></i>
        </div></div>
    </div>
</div>

<div class="card">
    <div class="card-header bg-white fw-semibold">Próximas citas</div>
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr><th>Paciente</th><th>Doctor</th><th>Fecha</th><th>Hora</th><th>Estado</th></tr>
            </thead>
            <tbody>
            <?php foreach ($citas as $c): ?>
                <tr>
                    <td><?= htmlspecialchars($c['paciente']) ?></td>
                    <td><?= htmlspecialchars($c['doctor']) ?></td>
                    <td><?= date('d/m/Y', strtotime($c['fecha'])) ?></td>
                    <td><?= htmlspecialchars($c['hora']) ?></td>
                    <td><?= badgeEstado($c['estado']) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
