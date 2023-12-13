<?php

// Jmenné prostory slouží k roztřídění a uspořádání tříd tak, aby
// dávalo hiearchicky smysl. Abychom mohli knihovnu použít, musíme
// pomocí příkazu use říct PHP, z jakého jmenného prostoru chceme
// třídu využít.
use Colors\RandomColor;
use Spatie\Color\Hex;

// Při instalaci balíčků skrze composer vznikne soubor autoload.php
// (interně využita funkce spl_autoload_register). Autoloading v PHP
// umožňuje naimplementovat logiku pro načítání souborů podle
// názvu třídy a jmenného prostoru.
require_once 'vendor/autoload.php';

// V tomto příkladu jsme si nainstalovali dvě knihovny - první generuje
// náhodné barvy, druhá umožňí s hex kódem vygenerované barvy dále pracovat.

// Vygenerovat 32 hex kódů
$colors = RandomColor::many(32);

foreach ($colors as $color) {
    // Zparsovat hex kód barvy, a převést na RGB
    $rgb = Hex::fromString($color)->toRgb();

    // Vypsat jednotlivé složky
    echo "<h1>$color</h1>";
    echo "<p>Red: {$rgb->red()}</p>";
    echo "<p>Blue: {$rgb->blue()}</p>";
    echo "<p>Green: {$rgb->green()}</p>";
}