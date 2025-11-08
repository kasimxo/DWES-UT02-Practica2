<?php

/**
 * Información extraída de: www.php.net/manual/en/language.types.array.php
 * 
 * Creación de arrays
 * Los arrays se pueden crear utilizando el constructor array() o directamente los caracteres []
 * 
 * Arrays indexados:
 * Un array indexado es aquel en el que cada elemento tiene asignado un número.
 * $array_indexado = [0 => 1, 1 => 2, 2 => 3];
 * Si no se declara el valor del índice de forma explícita, php lo asigna de forma automática.
 * $array_indexado = [1, 2, 3]; // es lo mismo que el array anterior
 * 
 * Arrays asociativos:
 * Un array asociativo es aquel en el que cada elemento tiene asignada una cadena.
 * $array_asociativo = ["primero" => 1, "segundo" => 2, "tercero" => 3];
 * 
 * Es importante tener en cuenta que en realidad, php trata todos los arrays como 'mapas' clave-valor.
 * Esto hace que no haya una diferencia significativa entre un array indexado y uno asociativo,
 * e incluso resulta posible crear un array mixto.
 * $array_mixto = ["primero" => 1, 2 => 2, "tercero" => 3];
 * 
 * Arrays multidimensionales:
 * Un array multidimensional es aquel que alberga otros arrays
 * $array_multidimensional = [[1, 2, 3], [1, 2, 3]];
 */

$socios = [
    1 => [
        "id" => 1,
        "nombre" => "Quijote",
        "apellidos" => "de la Mancha",
        "dni" => "11111111A",
        "email" => "lucha_molinos@yahoo.com",
        "telefono" => "666666666",
        "pagos" => [
            "2025-01" => [
                "mes" => "enero",
                "importe" => 123,
                "estado" => "Pagado",
                "fecha_pago" => "2025-02-03"
            ],
            "2025-02" => [
                "mes" => "febrero",
                "importe" => 35,
                "estado" => "Pagado",
                "fecha_pago" => "2025-02-28"
            ],
            "2025-03" => [
                "mes" => "marzo",
                "importe" => 213,
                "estado" => "Pagado",
                "fecha_pago" => "2025-03-15"
            ],
            "2025-04" => [
                "mes" => "abril",
                "importe" => 77,
                "estado" => "Pagado",
                "fecha_pago" => "2025-04-01"
            ],
            "2025-05" => [
                "mes" => "mayo",
                "importe" => 402,
                "estado" => "Pagado",
                "fecha_pago" => "2025-05-20"
            ],
            "2025-06" => [
                "mes" => "junio",
                "importe" => 510,
                "estado" => "Pagado",
                "fecha_pago" => "2025-06-03"
            ],
            "2025-07" => [
                "mes" => "julio",
                "importe" => 183,
                "estado" => "Pagado",
                "fecha_pago" => "2025-07-08"
            ],
            "2025-08" => [
                "mes" => "agosto",
                "importe" => 281,
                "estado" => "Pagado",
                "fecha_pago" => "2025-08-10"
            ],
            "2025-09" => [
                "mes" => "septiembre",
                "importe" => 72,
                "estado" => "Pagado",
                "fecha_pago" => "2025-09-29"
            ],
            "2025-10" => [
                "mes" => "octubre",
                "importe" => 237,
                "estado" => "Pendiente",
                "fecha_pago" => "2025-10-21"
            ],
            "2025-11" => [
                "mes" => "noviembre",
                "importe" => 123,
                "estado" => "Pendiente",
                "fecha_pago" => null
            ]
        ]
    ],
    2 => [
        "id" => 2,
        "nombre" => "Sancho",
        "apellidos" => "Panza",
        "dni" => "11111112B",
        "email" => "come_bocadillos@yahoo.com",
        "telefono" => "666666667",
        "pagos" => [
            "2025-01" => [
                "mes" => "enero",
                "importe" => 432,
                "estado" => "Pagado",
                "fecha_pago" => "2025-02-01"
            ],
            "2025-02" => [
                "mes" => "febrero",
                "importe" => 350,
                "estado" => "Pagado",
                "fecha_pago" => "2025-03-02"
            ],
            "2025-03" => [
                "mes" => "marzo",
                "importe" => 213,
                "estado" => "Pendiente",
                "fecha_pago" => null
            ],
            "2025-04" => [
                "mes" => "abril",
                "importe" => 77,
                "estado" => "Pendiente",
                "fecha_pago" => null
            ],
            "2025-05" => [
                "mes" => "mayo",
                "importe" => 11,
                "estado" => "Pagado",
                "fecha_pago" => "2025-05-22"
            ],
            "2025-06" => [
                "mes" => "junio",
                "importe" => 510,
                "estado" => "Pendiente",
                "fecha_pago" => null
            ],
            "2025-07" => [
                "mes" => "julio",
                "importe" => 183,
                "estado" => "Pendiente",
                "fecha_pago" => null
            ],
            "2025-08" => [
                "mes" => "agosto",
                "importe" => 28,
                "estado" => "Pagado",
                "fecha_pago" => "2025-08-19"
            ],
            "2025-09" => [
                "mes" => "septiembre",
                "importe" => 72,
                "estado" => "Pendiente",
                "fecha_pago" => null
            ],
            "2025-10" => [
                "mes" => "octubre",
                "importe" => 23,
                "estado" => "Pagado",
                "fecha_pago" => "2025-10-21"
            ],
            "2025-11" => [
                "mes" => "noviembre",
                "importe" => 199,
                "estado" => "Pendiente",
                "fecha_pago" => null
            ]
        ]
    ]
];           

echo "<h1>Listado de socios</h1>";
foreach ($socios as $socio){
    echo "<hr>";
    echo "<div>";
    echo "<p>Nombre: {$socio['nombre']} {$socio['apellidos']}</p>";
    echo "<p>Dni: {$socio['dni']}</p>";
    echo "<p>Email: {$socio['email']}</p>";
    echo "<p>Teléfono: {$socio['telefono']}</p>";
    echo "<table>";
    echo "<tr><th>Mes</th><th>Importe</th><th>Estado</th><th>Fecha de pago</th></tr>";
    $total_pagado = 0;
    $total_a_pagar = 0;
    foreach ($socio['pagos'] as $pago){
        $color = '#f7adadff';
        if ($pago['estado'] == "Pagado"){
            $color = 'transparent';
            $total_pagado += $pago['importe'];
        } else {
            $total_a_pagar += $pago['importe'];
        }
        echo "<tr>";
        echo "<td>{$pago['mes']}</td>";
        echo "<td style='background-color:{$color};' >{$pago['importe']}</td>";
        echo "<td>{$pago['estado']}</td>";
        echo "<td>{$pago['fecha_pago']}</td>";
        echo "</tr>";
    }
    echo "<tr><td>Total pagado:</td><td colspan='3'>{$total_pagado}</td></tr>";
    echo "<tr><td>Total a pagar:</td><td colspan='3' style='background-color:{$color};'>{$total_a_pagar}</td></tr>";
    echo "</table>";
    echo "</div>";
}
?>