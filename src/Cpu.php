<?php

class Cpu extends Componente{
    public int $socket;
    public float $velocidad;
    
    public function __toString(): string{
        return sprintf("Nombre: %s, Precio: %.2f€, Socket: %d Velocidad: %.2f€", $this->nombre, $this->precio, self::$socket, self::$velocidad);
    }
}