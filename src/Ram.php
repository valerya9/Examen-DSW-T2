<?php

class Ram extends Componente{
    public string $tipoRam;
    public int $tamaño;

    public function __toString(): string{
        return sprintf("Nombre: %s, Precio: %.2f€, Tipo Ram: %s Tamaño: %d", $this->nombre, $this->precio, self::$tipoRam, self::$tamaño);
    }
}