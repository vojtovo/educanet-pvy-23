<?php
$cislo1 = 10;
$cislo2 = 20;

// podminky tba comment
if ($cislo1 == $cislo2) {
    echo "je rovno";
} else if($cislo1 != $cislo2 && $cislo1 < 10) {
    echo "neni rovno A cislo1 je mensi nez deset";
} else if($cislo1 != $cislo2 || $cislo2 > 10) {
    echo "neni rovno NEBO cislo2 je vetsi nez deset";
} else {
    echo "neni rovno";
}

// ternarni operator tba comment
if ($cislo1 > $cislo2) {
    $prom = 'je vetsi';
} else {
    $prom = 'je mensi';
}

$prom = $cislo1 > $cislo2 ? 'je vetsi' : 'je mensi';