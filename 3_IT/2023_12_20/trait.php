<?php
// pomůžeme si hotovým kódem z minulé ukázky
require_once 'interface.php';

/**
 * Trait nám umožňuje "vložit" nějaký hotový kód dovnitř třídy
 * a vyhnout se tak opakování (DRY - Don't Repeat Yourself).
 *
 * Ukázkový trait UmiVydatZvuk nám definuje metodu vydejZvuk,
 * která jen vypíše na výstup hodnotu atributu "zvuk".
 */
trait UmiVydatZvuk
{
    public function vydejZvuk(): void
    {
        echo "{$this->zvuk}\n";
    }
}

// Níže příklady dvou tříd využívajících vložení metod skrze trait
class PesCoMaTrait implements Zvire
{
    // Pro vložení využívání klíčové slovo use UVNITŘ třídy (neplést
    // s use mimo třídu, které má úplně jiný význam).
    use UmiVydatZvuk;
    private string $zvuk = "Haf";
}

class KockaCoMaTrait implements Zvire
{
    use UmiVydatZvuk;
    private string $zvuk = "Mňau";
}

// Obě nové třídy splňují požadavky rozhrani Zvire, protože metodu
// implementují, i když zprostředkovaně přes trait.
donutZvireVydatZvuk(new PesCoMaTrait);
donutZvireVydatZvuk(new KockaCoMaTrait);
