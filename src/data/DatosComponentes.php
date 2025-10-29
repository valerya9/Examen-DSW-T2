<?php

namespace Valery\Pc\Datos;

class DatosComponentes {
    static private $datos = [
        'placa' => [
            'pb1' => ['nombre' => 'Asus B550', 'precio' => 120, 'socket' => 'AM4', 'tipo_ram' => 'DDR4'],
            'pb2' => ['nombre' => 'Gigabyte Z790', 'precio' => 200, 'socket' => 'LGA1700', 'tipo_ram' => 'DDR5'],
            'pb3' => ['nombre' => 'MSI B650', 'precio' => 180, 'socket' => 'AM5', 'tipo_ram' => 'DDR5'],
            'pb4' => ['nombre' => 'ASRock Z690', 'precio' => 220, 'socket' => 'LGA1700', 'tipo_ram' => 'DDR4'],
            'pb5' => ['nombre' => 'ASUS X570', 'precio' => 250, 'socket' => 'AM4', 'tipo_ram' => 'DDR4'],
            'pb6' => ['nombre' => 'Gigabyte B760', 'precio' => 160, 'socket' => 'LGA1700', 'tipo_ram' => 'DDR5'],
            'pb7' => ['nombre' => 'MSI X670', 'precio' => 300, 'socket' => 'AM5', 'tipo_ram' => 'DDR5'],
            'pb8' => ['nombre' => 'ASRock B450', 'precio' => 100, 'socket' => 'AM4', 'tipo_ram' => 'DDR4'],
            'pb9' => ['nombre' => 'ASUS Z590', 'precio' => 210, 'socket' => 'LGA1200', 'tipo_ram' => 'DDR4'],
            'pb10' => ['nombre' => 'Gigabyte X570S', 'precio' => 270, 'socket' => 'AM4', 'tipo_ram' => 'DDR4'],
        ],
        'cpu' => [
            'cpu1' => ['nombre' => 'AMD Ryzen 5 5600X', 'precio' => 150, 'socket' => 'AM4', 'velocidad' => 3,7],
            'cpu2' => ['nombre' => 'Intel i5-13600K', 'precio' => 300, 'socket' => 'LGA1700', 'velocidad' => 3,5],
            'cpu3' => ['nombre' => 'AMD Ryzen 7 7700X', 'precio' => 350, 'socket' => 'AM5', 'velocidad' => 4,5],
            'cpu4' => ['nombre' => 'Intel i7-12700K', 'precio' => 320, 'socket' => 'LGA1700', 'velocidad' => 3,6],
            'cpu5' => ['nombre' => 'AMD Ryzen 9 5900X', 'precio' => 400, 'socket' => 'AM4', 'velocidad' => 3,7],
            'cpu6' => ['nombre' => 'Intel i9-13900K', 'precio' => 600, 'socket' => 'LGA1700', 'velocidad' => 3,0],
            'cpu7' => ['nombre' => 'AMD Ryzen 5 7600X', 'precio' => 250, 'socket' => 'AM5', 'velocidad' => 4,7],
            'cpu8' => ['nombre' => 'Intel i5-12600K', 'precio' => 280, 'socket' => 'LGA1700', 'velocidad' => 3,7],
            'cpu9' => ['nombre' => 'AMD Ryzen 7 5800X', 'precio' => 320, 'socket' => 'AM4', 'velocidad' => 3,8],
        ],
        'ram' => [
            'ram1' => ['nombre' => '16GB Corsair Vengeance', 'precio' => 70, 'tipo_ram' => 'DDR4', 'tamaño' => 16],
            'ram2' => ['nombre' => '32GB G.Skill Trident', 'precio' => 130, 'tipo_ram' => 'DDR5', 'tamaño' => 32],
            'ram3' => ['nombre' => '16GB Kingston Fury', 'precio' => 80, 'tipo_ram' => 'DDR5', 'tamaño' => 16],
            'ram4' => ['nombre' => '32GB Crucial Ballistix', 'precio' => 120, 'tipo_ram' => 'DDR4', 'tamaño' => 32],
            'ram5' => ['nombre' => '64GB Corsair Dominator', 'precio' => 250, 'tipo_ram' => 'DDR4', 'tamaño' => 64],
            'ram6' => ['nombre' => '64GB G.Skill Ripjaws', 'precio' => 270, 'tipo_ram' => 'DDR5', 'tamaño' => 64],
        ],
    ];

    static public function obtenerDatos(string $tipoComponenete) : array {
        if (array_key_exists($tipoComponenete, self::$datos)) {
            return self::$datos[$tipoComponenete];
        } else {
            return array([]);
        }
    }

}
