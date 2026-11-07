<?php
require __DIR__ . '/includes/datos.php';

$titulo = 'Citas';
$activa = 'citas';

$mensaje = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $paciente = trim($_POST['paciente'] ?? '');
    $doctor   = trim($_POST['doctor'] ?? '');
    $fecha    = trim($_POST['fecha'] ?? '');
    $hora     = trim($_POST['hora'] ?? '');

    if ($paciente && $doctor && $fecha && $hora) {
        $mensaje = 'Cita solicitada para <strong>' . htmlspecialchars($paciente) . '</strong> con '
                 . htmlspecialchars($doctor) . ' el ' . htmlspecialchars($fecha) . ' a las ' . htmlspecialchars($hora)
                 . '. (Demostración: aún no se guarda en base de datos.)';
    }
}

include __DIR__ . '/includes/header.php';
?>

<h1 class="h3 mb-4">Gestión de Citas</h1>

<?php if ($mensaje): ?>
    <div class="alert alert-success"><?= $mensaje ?></div>
<?php endif; ?>

<div class="row g-4">
    <div class="col-12 col-xl-4">
        <div class="card">
            <div class="card-header bg-white fw-semibold">Agendar nueva cita</div>
            <div class="card-body">
                <form method="post" action="citas.php">
                    <div class="mb-3">
                        <label class="form-label" for="paciente">Paciente</label>
                        <select class="form-select" id="paciente" name="paciente" required>
                            <option value="">Seleccione...</option>
                            <?php foreach ($pacientes as $p): ?>
                                <option><?= htmlspecialchars($p['nombre']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="doctor">Doctor</label>
                        <select class="form-select" id="doctor" name="doctor" required>
                            <option value="">Seleccione...</option>
                            <?php foreach ($doctores as $d): ?>
                                <option><?= htmlspecialchars($d['nombre']) ?> - <?= htmlspecialchars($d['especialidad']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-7 mb-3">
                            <label class="form-label" for="fecha">Fecha</label>
                            <input type="date" class="form-control" id="fecha" name="fecha" required>
                        </div>
                        <div class="col-5 mb-3">
                            <label class="form-label" for="hora">Hora</label>
                            <input type="time" class="form-control" id="hora" name="hora" required>
                        </div>
                    </div>
                    <button class="btn btn-primary w-100" type="submit">
                        <i class="bi bi-calendar-plus me-1"></i> Agendar cita
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-12 col-xl-8">
        <div class="card">
            <div class="card-header bg-white fw-semibold">Listado de citas</div>
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr><th>#</th><th>Paciente</th><th>Doctor</th><th>Fecha</th><th>Hora</th><th>Motivo</th><th>Estado</th></tr>
                    </thead>
                    <tbody>
                    <?php foreach ($citas as $c): ?>
                        <tr>
                            <td><?= $c['id'] ?></td>
                            <td><?= htmlspecialchars($c['paciente']) ?></td>
                            <td><?= htmlspecialchars($c['doctor']) ?></td>
                            <td><?= date('d/m/Y', strtotime($c['fecha'])) ?></td>
                            <td><?= htmlspecialchars($c['hora']) ?></td>
                            <td><?= htmlspecialchars($c['motivo']) ?></td>
                            <td><?= badgeEstado($c['estado']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
