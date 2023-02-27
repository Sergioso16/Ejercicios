<?php

$produccion = array(
    array(3000, 7000, 2000),
    array(4000, 500, 600)
);

$composicion = array(
    array(10, 5, 35),
    array(15, 4, 31),
    array(18, 2, 30)
);


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


echo "Totales anuales: ";
print_r(totales_anuales($produccion, $composicion));
echo "\n";

echo "Máximo de litros de alquitrán: " . maximo_alquitran($produccion, $composicion) . "\n";
