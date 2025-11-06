<?php

// Array asociativo multidimensional de socios
// Cada socio tiene id, nombre, apellidos, dni, email y teléfono

// Además, cada socio tiene un array asociativo de pagos mensuales del año en curso
// AAAA-MM
// nombre del mes / importe cuota / Pagado/Pendiente / Fecha de pago o null
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
            ],
            "2025-12" => [
                "mes" => "diciembre",
                "importe" => 830,
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
            ],
            "2025-12" => [
                "mes" => "diciembre",
                "importe" => 730,
                "estado" => "Pendiente",
                "fecha_pago" => null
            ]
        ]
    ]
];           

foreach ($socios as $socio){
    echo "<div>";
    echo "{$socio['nombre']}";
    echo "<table>";
    echo "<tr><th>Mes</th><th>Importe</th><th>Estado</th><th>Fecha de pago</th></tr>";
    $total = 0;
    foreach ($socio['pagos'] as $pago){
        echo "<tr><td>{$pago['mes']}</td><td>{$pago['importe']}</td><td>{$pago['estado']}</td><td>{$pago['fecha_pago']}</td></tr>";
        if ($pago['estado'] == "Pagado"){
            $total += $pago['importe'];
        }
    }
    echo "<tr><td>{$total}</td></tr>";
    echo "</table>";
    echo "</div>";
}

?>