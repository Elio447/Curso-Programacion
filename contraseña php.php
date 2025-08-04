<?php

function validar_contrasena(string $contrasena): bool 
  if (strlen($contrasena) < 8) {
    return false;
  }
  if (!preg_match('/[A-Z]/', $contrasena)) {
    return false;

  if (!preg_match('/[0-9]/', $contrasena)) {
    return false;
  }
  return true;
}
$contrasena1 = "Contrasena123";
echo "'" . $contrasena1 . "' es válida: " . (validar_contrasena($contrasena1) ? "true" : "false") . "\n";
$contrasena2 = "Cort4";
echo "'" . $contrasena2 . "' es válida: " . (validar_contrasena($contrasena2) ? "true" : "false") . "\n";
$contrasena3 = "contrasena123";
echo "'" . $contrasena3 . "' es válida: " . (validar_contrasena($contrasena3) ? "true" : "false") . "\n";
$contrasena4 = "ContrasenaValida";
echo "'" . $contrasena4 . "' es válida: " . (validar_contrasena($contrasena4) ? "true" : "false") . "\n";
$contrasena5 = "contrasenainvalida";
echo "'" . $contrasena5 . "' es válida: " . (validar_contrasena($contrasena5) ? "true" : "false") . "\n";
$contrasena6 = "C0ntra$3n@!";
echo "'" . $contrasena6 . "' es válida: " . (validar_contrasena($contrasena6) ? "true" : "false") . "\n";

?>