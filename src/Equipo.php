<?php

class Equipo {
    public string $nombre;

    public $placa = null;
    public $cpu = null;
    public $ram = null;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function setPlaca(Placa $placa) {
        $this->placa = $placa;
    }

    public function getCpu() {
        return $this->cpu;
    }

    public function setCpu(Cpu $cpu) {
        $this->cpu = $cpu;
    }

    public function getRam() {
        return $this->ram;
    }

    public function setRam(Ram $ram) {
        $this->ram = $ram;
    }

    public function compatibilida(){
       
    }

    public function precio(){
       
    }
    
}