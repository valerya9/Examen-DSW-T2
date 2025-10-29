<?php

namespace Valery\Pc;

abstract class Componente {
    public string $nombre;
    public float $precio;

    abstract public function  __toString() : string;

}