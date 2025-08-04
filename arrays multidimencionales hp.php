<?php
$estudiantes = [
    [
        'nombre' => 'Ana Pérez',
        'notas' => [
            'Matemáticas' => 18,
            'Historia' => 20,
            'Literatura' => 17
        ]
    ],
    [
        'nombre' => 'Carlos Gomez',
        'notas' => [
            'Matemáticas' => 17,
            'Historia' => 16,
            'Literatura' => 20
        ]
    ],
    [
        'nombre' => 'Marta López',
        'notas' => [
            'Matemáticas' => 15,
            'Historia' => 17,
            'Literatura' => 18
        ]
    ]
];
foreach ($estudiantes as $estudiante) {
    echo "\n";
    echo "Estudiante: " . $estudiante['nombre'] . "\n";
    foreach ($estudiante['notas'] as $materia => $calificacion) {
        echo "- " . $materia . ": " . $calificacion . "\n";
    }
}
?>