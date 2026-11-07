<?php
// Cabecera común: <head>, barra superior y menú lateral.
// Cada página define antes de incluirla:  $titulo  y  $activa
$titulo = $titulo ?? 'Citas Médicas';
$activa = $activa ?? '';

$menu = [
    'index'    => ['index.php',    'bi-speedometer2',  'Dashboard'],
    'citas'    => ['citas.php',    'bi-calendar-check','Citas'],
    'doctores' => ['doctores.php', 'bi-person-badge',  'Doctores'],
    'pacientes'=> ['pacientes.php','bi-people',        'Pacientes'],
    'contacto' => ['contacto.php', 'bi-envelope',      'Contacto'],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($titulo) ?> | Citas Médicas</title>
    <link rel="icon" href="img/logo.svg" type="image/svg+xml">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-primary fixed-top shadow-sm">
    <div class="container-fluid">
        <button class="btn btn-outline-light d-lg-none me-2" id="btnMenu" type="button" aria-label="Abrir menú">
            <i class="bi bi-list"></i>
        </button>
        <a class="navbar-brand d-flex align-items-center me-auto" href="index.php">
            <img src="img/logo.svg" alt="Logo" width="30" height="30" class="me-2">
            Citas Médicas
        </a>
        <span class="navbar-text text-white d-none d-md-inline">
            <i class="bi bi-person-circle me-1"></i> Administrador
        </span>
    </div>
</nav>

<div class="layout">
    <aside class="sidebar" id="sidebar">
        <ul class="nav flex-column">
            <?php foreach ($menu as $clave => [$url, $icono, $texto]): ?>
                <li class="nav-item">
                    <a class="nav-link <?= $activa === $clave ? 'active' : '' ?>" href="<?= $url ?>">
                        <i class="bi <?= $icono ?> me-2"></i><?= $texto ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </aside>

    <main class="content">
