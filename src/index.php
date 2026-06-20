<?php
require_once 'POO/Producto.php';

// Instanciar productos con categoría
$prod1 = new Producto("Laptop Gamer", 1500, "Electrónica");
$prod2 = new Producto("Mouse Inalámbrico", 80, "Oficina");
$prod3 = new Producto("Monitor 4K", 1200, "Electrónica");

echo "<h2>Catálogo POO</h2>";
echo "<ul>";
echo "<li>" . $prod1->getInfo() . "</li>";
echo "<li>" . $prod2->getInfo() . "</li>";
echo "<li>" . $prod3->getInfo() . "</li>";
echo "</ul>";
?>