<?php

/**
 * Interface nám slouží jako předpis pro to, jak budou vypadat třídy,
 * které jej implementují, jedná se tak o další vrstvu abstrakce.
 *
 * Toto je užitečné zejména k tomu, že můžeme nadefinovat, jaké metody
 * musí třída a objekty z ní vytvořené mít, ale konkrétní implementaci
 * už nemusíme řešit.
 *
 * Tohoto využívají mj. také některé PSR standardy, které definují,
 * jak má vypadat v PHP např. práce s HTTP. Pokud pracujeme s těmito
 * interfacy, můžeme využít libovolnou implementaci, která je implementuje
 * a splňuje.
 */

/**
 * Příklad jednoduchého interface, který definuje jedinou metodu,
 * tuto metodu budou povinně mít všechny třídy implementující
 * daný interface.
 */
interface Zvire
{
    /**
     * Všimněte si, že metoda nemá tělo, ale pouze "signaturu",
     * interface nám pouze definuje, jaké metody mají objekty mít,
     * ne však, jak budou implementované - to je na nás.
     *
     * @return void
     */
    public function vydejZvuk(): void;
}

// Níže příklady dvou tříd implementujících rozhraní Zvire.
class Kocka implements Zvire
{
    public function vydejZvuk(): void
    {
        echo "Mňau\n";
    }
}

class Pes implements Zvire
{
    public function vydejZvuk(): void
    {
        echo "Haf\n";
    }
}

/**
 * Funkce donutZvireVydatZvuk očekává na svém vstupu objekt
 * typu Zvire, tím bude objekt libovolné třídy, která interface
 * Zvire implementuje.
 *
 * @param Zvire $zvire
 * @return void
 */
function donutZvireVydatZvuk(Zvire $zvire)
{
    $zvire->vydejZvuk();
}

donutZvireVydatZvuk(new Kocka);
donutZvireVydatZvuk(new Pes);