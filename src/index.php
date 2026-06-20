<?php
// 1. Variables y Strings
$nombre = "Gustavo";
$edad = 28;
$ciudad = "Cartago valle";
$carrera = "Ingeniería de Sistemas";
$semestre = 5;
$materiaFavorita = "Servidores";

// 2. Concatenación y mostrar en HTML
echo "<h1>Mi presentación</h1>";
echo "<p>Hola, soy <strong>$nombre</strong>, tengo $edad años, vivo en $ciudad y estudio $carrera.</p>";

// 3. Nueva información solicitada
echo "<p>Estoy en $semestre semestre y mi materia favorita es $materiaFavorita.</p>";

// 4. Diferencia entre comillas simples y dobles
echo '<p>Con comillas simples: $nombre no se interpreta</p>';
?>