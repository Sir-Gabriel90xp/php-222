<?php
// Datos de ejemplo (simulan una base de datos)

$doctores = [
    ['id' => 1, 'nombre' => 'Dra. Laura Méndez',   'especialidad' => 'Cardiología',    'telefono' => '809-555-0101', 'horario' => 'Lun - Vie, 8:00 - 14:00'],
    ['id' => 2, 'nombre' => 'Dr. Carlos Ramírez',  'especialidad' => 'Pediatría',      'telefono' => '809-555-0102', 'horario' => 'Lun - Jue, 9:00 - 16:00'],
    ['id' => 3, 'nombre' => 'Dra. Sofía Peña',     'especialidad' => 'Dermatología',   'telefono' => '809-555-0103', 'horario' => 'Mar - Sáb, 10:00 - 17:00'],
    ['id' => 4, 'nombre' => 'Dr. Miguel Torres',   'especialidad' => 'Medicina General','telefono' => '809-555-0104', 'horario' => 'Lun - Vie, 7:00 - 13:00'],
];

$pacientes = [
    ['id' => 1, 'nombre' => 'Ana Martínez',   'edad' => 34, 'telefono' => '829-555-0201', 'email' => 'ana@example.com'],
    ['id' => 2, 'nombre' => 'José Rodríguez', 'edad' => 52, 'telefono' => '829-555-0202', 'email' => 'jose@example.com'],
    ['id' => 3, 'nombre' => 'María Gómez',    'edad' => 8,  'telefono' => '829-555-0203', 'email' => 'maria@example.com'],
    ['id' => 4, 'nombre' => 'Pedro Santana',  'edad' => 45, 'telefono' => '829-555-0204', 'email' => 'pedro@example.com'],
    ['id' => 5, 'nombre' => 'Lucía Fernández','edad' => 29, 'telefono' => '829-555-0205', 'email' => 'lucia@example.com'],
];

$citas = [
    ['id' => 1, 'paciente' => 'Ana Martínez',    'doctor' => 'Dra. Laura Méndez',  'fecha' => '2026-11-09', 'hora' => '08:30', 'motivo' => 'Control cardíaco',    'estado' => 'Confirmada'],
    ['id' => 2, 'paciente' => 'José Rodríguez',  'doctor' => 'Dr. Miguel Torres',  'fecha' => '2026-11-09', 'hora' => '09:15', 'motivo' => 'Consulta general',    'estado' => 'Pendiente'],
    ['id' => 3, 'paciente' => 'María Gómez',     'doctor' => 'Dr. Carlos Ramírez', 'fecha' => '2026-11-10', 'hora' => '10:00', 'motivo' => 'Vacunación',          'estado' => 'Confirmada'],
    ['id' => 4, 'paciente' => 'Pedro Santana',   'doctor' => 'Dra. Sofía Peña',    'fecha' => '2026-11-10', 'hora' => '11:30', 'motivo' => 'Revisión de piel',    'estado' => 'Cancelada'],
    ['id' => 5, 'paciente' => 'Lucía Fernández', 'doctor' => 'Dra. Laura Méndez',  'fecha' => '2026-11-11', 'hora' => '08:00', 'motivo' => 'Electrocardiograma',  'estado' => 'Pendiente'],
];

function badgeEstado(string $estado): string
{
    $clases = [
        'Confirmada' => 'success',
        'Pendiente'  => 'warning text-dark',
        'Cancelada'  => 'danger',
    ];
    $c = $clases[$estado] ?? 'secondary';
    return '<span class="badge bg-' . $c . '">' . htmlspecialchars($estado) . '</span>';
}
