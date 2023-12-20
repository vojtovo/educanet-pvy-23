<?php
// -----------------------------------------------------------------
// Funkce
// -----------------------------------------------------------------

// Funkce jsou užitečné zejm. pro členění kódu a deduplikaci,
// abyste nemuseli dokola kopírovat nějakou logiku, ale zapsat ji
// pouze jednou jako funkci a tu poté volat.
//
// PHP má v standardních knihovnách dostupné poměrně bohaté množství
// funkcí, v minulosti jsme pracovali např. s funkcemi echo, var_dump.
//
// Funkci voláme zapsáním jejího názvu a vyplněním vstupních
// argumentů (data, která budou předána do funkce). Váš editor při
// najetí kurzoru myši na název funkce zobrazí, jaké argumenty
// musíte zadat a jaká bude návratová hodnota ("co funkce vrátí").
//
// Př. pow - výpočet 3 mocniny čísla 10
echo pow(10, 3);

// Funkce můžeme sami deklarovat klíčovým slovem "function",
// následuje název funkce a závorky. V závorkách uvádíme, jaké
// argumenty od uživatele očekáváme. Nemusíme uvádět datové typy,
// pokud je uvedeme, nemusíme provádět jejich kontrolu v těle
// funkce. Za závorky můžeme vložit dvojtečku a typ návratové
// hodnoty, opět nepovinné, ale doporučuji.
//
// Pokud může být argument různých hodnot (např. integer a float),
// je možné uvést více datových typů, oddělujeme je pak od sebe
// svislicí (pajpa).
//
// Pokud víme, že argument bude mít nějakou hodnotu ve většině případů
// stejnou (např. často počítáme sazbu DPH 21 %), můžeme nastavit
// výchozí hodnotu argumentu tak, že za název napíšeme rovnítko
// a onu výchozí hodnotu.

/**
 * Funkce pro výpočet ceny s DPH z ceny bez DPH a procentuální sazby
 *
 * @param int|float $cenaBezDPH
 * @param int $sazba
 * @return float
 */
function cenaDPH(int|float $cenaBezDPH, int $sazba = 21): float
{
    return $cenaBezDPH * (1 + ($sazba / 100));
}

// Funkci pak můžeme volat jako každou jinou:
echo cenaDPH(1250, 15);

// Pokud má funkce více argumentů, můžeme vypsat jejich názvy
// a nemusíme tak nutně dodržovat jejich pořadí při volání:
echo cenaDPH(
    sazba: 10,
    cenaBezDPH: 29.90,
);

// Pokud nevyplníme argument s výchozí hodnotou, dosadí
// se ona výchozí hodnota:
echo cenaDPH(45.50);