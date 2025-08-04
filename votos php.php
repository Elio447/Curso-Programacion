<?php
$votos = [
    'CandidatoA' => 0,
    'CandidatoB' => 0,
    'CandidatoC' => 0,
];
function emitir_voto(&$votos, $candidato) {
    if (array_key_exists($candidato, $votos)) {
        $votos[$candidato]++;
        echo "¡Voto emitido para $candidato!\n";
    } else {
        echo "Error: El candidato $candidato no existe.\n";
    }
}
echo "--- Simulación de votación ---\n";

$candidatos_disponibles = array_keys($votos);

for ($i = 0; $i < 10; $i++) {
    $candidato_aleatorio = $candidatos_disponibles[array_rand($candidatos_disponibles)];
    emitir_voto($votos, $candidato_aleatorio);
}
echo "\n--- 🎉 Resultados finales 🎉 ---\n";

foreach ($votos as $candidato => $conteo) {
    echo "El candidato $candidato obtuvo $conteo votos.\n";
}

?>