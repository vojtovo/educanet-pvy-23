<?php
// -----------------------------------------------------------------
// Vkládání souborů
// -----------------------------------------------------------------

// V PHP je možné vkládat kód z jiných souborů pomocí direktiv
// include a require. To je šikovné zejména k deduplikaci kódu,
// funkci můžeme napsat jednou a vložit do více souborů. Zároveň
// jde o prerekvizitu k tomu, abychom mohli využívat správce
// balíčků a externí knihovny.


// Include vloží obsah souboru.
// include 'funkce.php';

// Require dělá totéž. Rozdíl oproti include je, že pokud vkládaný
// soubor neexistuje, dojde k ukončení běhu skriptu a zobrazení
// fatální chyby.
// require 'funkce.php';

// Funkce nemůžeme redeklarovat (deklarovat vícekrát). Pokud bychom
// omylem vložili soubor s funkcemi vícekrát, dojde k fatální chybě.
// Tomu lze předejít suffixem _once. Pokud zavoláme např. require_once
// vícekrát za sebou, vykoná se pouze poprvé. Totéž platí pro
// include_once.
// include_once 'funkce.php';
// require_once 'funkce.php';

// Skript je vykonáván odzhora dolů, tudíž i nahrávání souborů je
// zde závislé na pořadí. Pokud bychom pořadí níže obrátili, dojde
// k chybě, protože v souboru sablona.php voláme funkci ze souboru
// funkce.php, při opačném nahrání by došlo k volání před deklarací
// funkce, ta by v moment volání ještě neexistovala.
require_once 'funkce.php';
require_once 'sablona.php';