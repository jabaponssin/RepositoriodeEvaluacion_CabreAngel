<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
// Arreglo inicial de empleados
$empleados = [
    "Juan" => 3000,
    "Ana" => 2500,
    "Pedro" => 4000,
    "Maria" => 3500,
    "Luis" => 2800,
];

// Ordenar el arreglo por sueldo
asort($empleados);

// Imprimir el arreglo ordenado
echo "Empleados ordenados por sueldo:\n <br>";
foreach ($empleados as $nombre => $sueldo) {
    echo "Nombre: $nombre, Sueldo: $sueldo\n <br>";
}
array_push($empleados, ["Sofia" => 3200, "Carlos" => 2900,]);

$empleados = array_merge($empleados, ["Sofia" => 3200, "Carlos" => 2900]);

asort($empleados);

echo "\nEmpleados después de agregar nuevos:\n <br>";
foreach ($empleados as $nombre => $sueldo) {
    echo "Nombre: $nombre, Sueldo: $sueldo\n <br>";
}
?>
</body>
</html>