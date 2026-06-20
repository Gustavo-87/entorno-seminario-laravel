<?php
class Producto {
    // Atributos privados
    private $nombre;
    private $precio;
    private $iva;
    private $categoria;

    // Constructor
    public function __construct($nombre, $precio, $categoria, $iva = 0.19) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->categoria = $categoria;
        $this->iva = $iva;
    }

    // Método para obtener el precio final
    public function getPrecioFinal() {
        return $this->precio * (1 + $this->iva);
    }

    // Método para obtener el nombre
    public function getNombre() {
        return $this->nombre;
    }

    // Método para obtener la categoría
    public function getCategoria() {
        return $this->categoria;
    }

    // Método para mostrar información formateada
    public function getInfo() {
        return "Producto: {$this->nombre} | Categoría: {$this->categoria} | Precio Final: $" . $this->getPrecioFinal();
    }
}
?>