<?php

$horario = [
    "Lunes" => [
        "16:00-17:50" => "DIW",
        "17:50-18:45" => "DWES",
        "18:45-19:10" => "RECREO",
        "19:10-21:00" => "DWES",
        "21:00-21:55" => "ITGS"

    ],
    "Martes" => [
        "16:00-17:50" => "DWEC",
        "17:50-18:45" => "EIE",
        "18:45-19:10" => "RECREO",
        "19:10-21:55" => "DWES"

    ],
    "Miercoles" => [
        "16:00-17:50" => "DIW",
        "17:50-18:45" => "EIE",
        "18:45-19:10" => "RECREO",
        "19:10-20:05" => "EIE",
        "20:05-21:55" => "DAW"
    ],
    "Jueves" => [
        "16:00-17:50" => "DWEC",
        "17:50-18:45" => "DAW",
        "18:45-19:10" => "RECREO",
        "19:10-20:05" => "DAW",
        "20:05-21:55" => "DIW"

    ],
    "Viernes" => [
        "16:00-18:45" => "DWES",
        "18:45-19:10" => "RECREO",
        "19:10-21:00" => "DWEC",
        "21:00-21:55" => "ITGS"

    ],
];


$integrantes = [
    "Miguel Martínez",
    "David Murillo",
    "Juanma Suarez",
    "Maki Mirón"
];

$modulos=[
    "DWES"=>"Desarrollo web en entorno servidor",
    "DAW"=> "Despliegue de aplicaciones web",
    "DIW"=>"Diseño de interfaces web",
    "DWEC"=>"Desarrollo web en entorno cliente",
    "EIE"=>"Empresa e iniciativa emprendedora",
    "ITGS"=>"Inglés técnico" 
];
