<?php
require __DIR__ . '/includes/datos.php';

$titulo = 'Pacientes';
$activa = 'pacientes';

include __DIR__ . '/includes/header.php';
?>

<h1 class="h3 mb-4">Pacientes registrados</h1>

<div class="card">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr><th>#</th><th>Nombre</th><th>Edad</th><th>Teléfono</th><th>Correo</th></tr>
            </thead>
            <tbody>
            <?php foreach ($pacientes as $p): ?>
                <tr>
                    <td><?= $p['id'] ?></td>
                    <td><i class="bi bi-person-circle text-primary me-2"></i><?= htmlspecialchars($p['nombre']) ?></td>
                    <td><?= $p['edad'] ?> años</td>
                    <td><?= htmlspecialchars($p['telefono']) ?></td>
                    <td><?= htmlspecialchars($p['email']) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
