<?php
/**
 * Funkce pro výpočet ceny s DPH z ceny bez DPH a procentuální sazby
 *
 * @param int|float $cenaBezDPH
 * @param int $sazba
 * @return float
 */
function cenaDPH(int|float $cenaBezDPH, int $sazba = 21): float {
    return $cenaBezDPH * (1 + ($sazba / 100));
}

function sachovnice(int $velikost = 8): string {
    $buffer = "<table>";
    for ($i = 0; $i < $velikost; $i++) {
        $buffer .= "<tr>";
        for ($j = 0; $j < $velikost; $j++) {
            $color = 'white';

            if (($j + $i) % 2 == 0) {
                $color = 'black';
            }

            $buffer .= "<td style='background: {$color}'></td>";
        }
        $buffer .= "</tr>";
    }
    $buffer .= "</table>";

    return $buffer;
}