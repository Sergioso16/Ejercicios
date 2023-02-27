<?php
// Definimos las matrices de producción y composición de lubricantes
$produccion = array(
    array(3000, 7000, 2000),
    array(4000, 500, 600)
);

$composicion = array(
    array(10, 5, 35),
    array(15, 4, 31),
    array(18, 2, 30)
);

// Función para obtener los totales anuales de aceites finos, alquitrán y grasas residuales
function totales_anuales($produccion, $composicion) {
    $totales = array(0, 0, 0);
    for ($i = 0; $i < count($produccion); $i++) {
        for ($j = 0; $j < count($produccion[$i]); $j++) {
            $totales[0] += $produccion[$i][$j] * $composicion[0][$j];
            $totales[1] += $produccion[$i][$j] * $composicion[1][$j];
            $totales[2] += $produccion[$i][$j] * $composicion[2][$j];
        }
    }
    return $totales;
}

// Función para obtener el máximo de litros de alquitrán consumidos por ambas refinerías
function maximo_alquitran($produccion, $composicion) {
    $max_alquitran = 0;
    for ($i = 0; $i < count($produccion); $i++) {
        for ($j = 0; $j < count($produccion[$i]); $j++) {
            $alquitran = $produccion[$i][$j] * $composicion[1][$j];
            if ($alquitran > $max_alquitran) {
                $max_alquitran = $alquitran;
            }
        }
    }
    return $max_alquitran;
}

// Función para obtener la matriz de consumo de todos los elementos de un lubricante en cada refinería
function matriz_consumo($produccion, $composicion) {
    $matriz_consumo = array();
    for ($i = 0; $i < count($produccion); $i++) {
        $fila_consumo = array();
        for ($j = 0; $j < count($produccion[$i]); $j++) {
            $consumo = array(
                $produccion[$i][$j] * $composicion[0][$j],
                $produccion[$i][$j] * $composicion[1][$j],
                $produccion[$i][$j] * $composicion[2][$j]
            );
            array_push($fila_consumo, $consumo);
        }
        array_push($matriz_consumo, $fila_consumo);
    }
    return $matriz_consumo;
}

// Probamos las funciones con los datos de ejemplo
echo "Totales anuales: ";
print_r(totales_anuales($produccion, $composicion));
echo "\n";

echo "Máximo de litros de alquitrán: " . maximo_alquitran($produccion, $composicion) . "\n";
