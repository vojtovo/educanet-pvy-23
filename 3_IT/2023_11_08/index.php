<?php
// -----------------------------------------------------------------
// Asociativní pole
// -----------------------------------------------------------------

// PHP nemá samostatné typy pro pole, mapu, ... vše je asociativní
// pole. Pole deklarujeme použitím hranatých závorek:
$pole = [];

// Pole můžeme vytvořit s výchozími hodnotami:
$poleJmen = [
    'Jan', 'Jakub', 'Jiri'
];

// Pro adresaci můžeme využívat také string:
$polePoctuLidiDanehoJmena = [
    'Jan' => 50,
    'Jakub' => 80,
    'Jiri' => 200,
];

// Pokud klíč neuvedeme, PHP doplní automaticky číselný
// index. Je dobrým zvykem ale metody adresace nemíchat.

// Výpis konkrétní hodnoty z pole:
echo "Jiřích je ve skupině {$polePoctuLidiDanehoJmena['Jiri']}\n";

// Hodnotu pole můžeme přepsat:
$polePoctuLidiDanehoJmena['Jiri'] = 123;
// Pokud v poli klíč neexistuje, dojde k jeho přidání, pokud
// existuje, přepíše se.

// Pole může být i vícerozměrné:
$sachovnice = [
    '1' => [
        'A' => 'věž',
        'B' => 'kůň',
        // ...
    ],
    '2' => [
        'A' => 'pěšák',
        'B' => 'pěšák',
        // ...
    ],
];

// Výpis probíhá stejně, jen "řetězíme" klíče za sebe:
echo "Na souřadici 1B je {$sachovnice['1']['B']}\n";

// Superglobální proměnná $_GET je také asociativní pole.

// -----------------------------------------------------------------
// Cykly
// -----------------------------------------------------------------

// for cyklus
// Při psaní inicializujeme proměnnou (typicky $i) a uvádíme řídící
// podmínku ("dokud je $i menší nebo rovno 100"), nakonec operaci,
// která se stane po každém opakování ("inkrementuj hodnotu $i")
for ($i = 0; $i <= 100; $i++) {
    echo "{$i} ";
}

// Můžeme i dekrementovat:
//  $i--;
// Nebo používat libovolné jiné operátory:
//  $i += 2;
//  $i *= 10;
//  $i -= 18;

// while cyklus
// Cyklus se opakuje tak dlouho, dokud platí řídící podmínka. Možným
// případem pro užití může být nekonečná smyčka ("while true") nebo
// třeba časový odpočet, případů je pochopitelně mnohem víc.
// Příklad výš bychom pomocí while cyklu zapsali takto:
$i = 0;
while ($i <= 100) {
    echo "{$i} ";
    $i++;
}

// do while
// Totožný s while, ovšem pořadí vykonávání je obrácené - nejprve
// vykonáme tělo cyklu, až poté kontrolujeme řídící podmínku:
$i = 0;
do {
    echo "{$i} ";
    $i++;
} while ($i <= 100);

// break
// Všechny cykly jsou přerušit pomocí slova "break".

// foreach
// Zvláštní druh cyklu, který slouží pro průchod všemy prvky pole.
// Příkald níže nám vypíše z pole $polePoctuLidiDanehoJmena nejprve
// křestní jméno (klíč) a poté počet lidí (hodnota)
foreach ($polePoctuLidiDanehoJmena as $jmeno => $pocet) {
    echo "{$jmeno}: {$pocet}\n";
}

// Pokud nepotřebujeme klíč (např. iterujeme skrze pole, kde jsme
// nepoužili klíče a spoléháme na indexaci pomocí čísla), můžeme jej
// vynechat:
foreach ($poleJmen as $jmeno) {
    echo "{$jmeno}\n";
}

// Vnořené cykly
// Cykly můžeme zároveň zanořovat, vizte příklad se šachovnicí:
// sachovnice.php