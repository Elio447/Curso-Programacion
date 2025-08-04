<?php
$es_profesor = true;
$tiene_clase = false;
$contador = 10;
if ($es_profesor or $tiene_clase) {
    echo "sois profesor o tienes clases\n";
}
   
if (! $tiene_clase) {
    echo "no tenei clases\n";
}
echo ++$contador;
echo $contador-- . "\n";
echo "el nuevo valor es: " . $contador;
?>