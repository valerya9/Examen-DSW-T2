<?php

class Placa extends Componente{
    public int $socket;
    public string $tipoRam;

    public function __toString(): string{
        return sprintf("Nombre: %s, Precio: %.2f€, Socket: %d Tipo Ram: %s", $this->nombre, $this->precio, self::$socket, self::$tipoRam);
    }
}