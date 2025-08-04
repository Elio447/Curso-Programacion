<?php
$frutas = ["Manzana\n", "Banana\n", "Uva\n", "Naranja\n", "Fresa\n"];
foreach ($frutas as $fruta) {
    echo $fruta;
}
$producto = [
    "nombre" => "Uva",
    "precio" => 2.50,
    "stock" => 50
];

echo "Detalles del produto";
echo "Nombre: " . $producto["nombre"] . "\n";
echo "Precio: $" . number_format($producto["precio"], 2) . "\n";
echo "Stock" . $producto["stock"] . "\n";
?>