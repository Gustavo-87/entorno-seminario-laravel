<?php
// Función para calcular precio final con IVA
function calcularPrecioFinal($precio, $iva = 0.19) {
    return $precio * (1 + $iva);
}

// Función para validar si una persona es mayor de edad
function esMayorDeEdad($edad) {
    return $edad >= 18;
}

// Array de productos sin IVA
$inventario = [
    "Laptop" => 1200,
    "Mouse" => 25,
    "Teclado" => 45
];

echo "<h2>Precios con IVA incluido</h2>";

foreach ($inventario as $nombre => $precio) {
    $precioFinal = calcularPrecioFinal($precio);

    if ($precioFinal > 100) {
        echo "<p><strong style='color:red;'>$nombre: $$precioFinal (Caro)</strong></p>";
    } else {
        echo "<p>$nombre: $$precioFinal (Económico)</p>";
    }
}

echo "<hr>";

echo "<h2>Validación de edades</h2>";

$edades = [12, 25, 17, 30, 15];

foreach ($edades as $edad) {
    if (esMayorDeEdad($edad)) {
        echo "<p>La persona con edad $edad es MAYOR de edad</p>";
    } else {
        echo "<p>La persona con edad $edad es MENOR de edad</p>";
    }
}
?>