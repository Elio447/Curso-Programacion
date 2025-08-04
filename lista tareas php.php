<?php
$tareas = [
    [
        'tarea' => 'Comprar pan',
        'completada' => false,
        'prioridad' => 'alta'
    ],
    [
        'tarea' => 'Estudiar PHP',
        'completada' => false,
        'prioridad' => 'alta'
    ],
    [
        'tarea' => 'Llamar al dentista',
        'completada' => false,
        'prioridad' => 'media'
    ],
    [
        'tarea' => 'Regar las plantas',
        'completada' => true,
        'prioridad' => 'baja'
    ]
];

echo "Todas las tareas\n";
foreach ($tareas as $tarea) {
    echo "Tarea: " . $tarea['tarea'] . ", Completada: " . ($tarea['completada'] ? 'Sí' : 'No') . ", Prioridad: " . $tarea['prioridad'] . "\n";
}

echo "\nMarcando una tarea como completada\n";
$tarea_a_completar = 1; 
if (isset($tareas[$tarea_a_completar])) {
    $tareas[$tarea_a_completar]['completada'] = true;
    echo "Tarea '" . $tareas[$tarea_a_completar]['tarea'] . "' marcada como completada!\n";
} else {
    echo "Error " . $tarea_a_completar . " no existe.\n";
}

echo "\nTareas pendientes\n";
foreach ($tareas as $tarea) {
    if ($tarea["completada"] === false) {
        echo "Tarea: " . $tarea['tarea'] . ", Prioridad: " . $tarea['prioridad'] . "\n";
    }
}

?>