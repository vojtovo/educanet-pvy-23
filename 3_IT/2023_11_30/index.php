<?php
// -----------------------------------------------------------------
// Objektově orientované programování v PHP
// -----------------------------------------------------------------
// Vizte:
// https://classroom.google.com/c/NjIxNDA0NDQzNTE2/m/NjQzNDI3NTEwNTQ2/details

/**
 * Tvar je abstraktní třída - lze ji rozšiřovat (dědit z ní), ale
 * nelze z ní vytvářet objekty.
 */
abstract class Tvar {
    /*
     * Atribut $barva je dostupný pouze uvnitř objektů vytvořených
     * z tříd dědících z třídy Tvar, nemůžeme jej měnit mimo objekt.
     */
    protected string $barva;

    /**
     * Konstruktor je speciální metoda, která je volána jen při vytvoření
     * objektu. Můžeme ji využít pro nastavení hodnot při vytváření
     * místo pracného volání setterů pro nastavení jednotlivých atributů.
     * @param string $barva
     */
    public function __construct(string $barva)
    {
        $this->barva = $barva;
    }

    /**
     * Získej barvu tvaru
     * @return string
     */
    public function getBarva(): string
    {
        return $this->barva;
    }

    /**
     * Nastav barvu tvaru
     * @param string $barva
     * @return void
     */
    public function setBarva(string $barva): void
    {
        $this->barva = $barva;
    }
}

/**
 * Třída Kruznice rozšiřuje třídu Tvar - přidává metody pro výpočet průměru
 * a obvodu kružníce
 */
final class Kruznice extends Tvar {
    private float $polomer;

    public function getPolomer(): float
    {
        return $this->polomer;
    }

    public function setPolomer(float $polomer): void
    {
        $this->polomer = $polomer;
    }

    public function getPrumer(): float
    {
        return $this->polomer * 2;
    }

    public function getObvod(): float
    {
        return $this->polomer * 2 * 3.14;
    }
}

final class Ctverec extends Tvar {
    /**
     * V PHP 8 je možné zapsat atributy s jejich viditelností přímo do konstuktoru
     * a kód tak zpřehlednit - atribut delkaStrany je implementován právě tímto
     * způsobem.
     *
     * @param string $barva
     * @param float $delkaStrany
     */
    public function __construct(
        string $barva,
        private float $delkaStrany
    )
    {
        // Uvnitř konstruktoru Ctverec voláme zároveň konstruktor Tvar a jen předáváme
        // barvu. Konstruktor rodiče bychom volat nemuseli a barvu mohli nastavit
        // sami, pokud má ale konstruktor rodiče nějakou složitější logiku, můžeme
        // jej využít a vyhnout se kopírování kódu (DRY - Don't Repeat Yourself)
        parent::__construct($barva);
    }

    public function getDelkaStrany(): float
    {
        return $this->delkaStrany;
    }

    public function setDelkaStrany(float $delkaStrany): void
    {
        $this->delkaStrany = $delkaStrany;
    }

    public function getObvod(): float
    {
        return $this->delkaStrany * 4.0;
    }

    public function getObsah(): float
    {
        return $this->delkaStrany * $this->delkaStrany;
    }
}

// Objekt vytvoříme pomocí klíčového slova new
$kruznice = new Kruznice('zelena');
// Pro volání metod objektu využíváme operátor "->"
$kruznice->setBarva('fialova');
$kruznice->setPolomer(5);

$ctverec = new Ctverec('cervena', 3.6);
echo "Obvod čtverce: {$ctverec->getObvod()}\n";
echo "Obsah čtverce: {$ctverec->getObsah()}\n";

// Ačkoli nemůžeme vytvořit objekt typu Tvar, můžeme vytvořit objekt typu
// Kruznice nebo Ctverec, které Tvar rozšiřují. Funkce níže využívá principu
// polymorfismu
function vypisBarvuTvaru(Tvar $tvar): void
{
    echo $tvar->getBarva().PHP_EOL;
}
vypisBarvuTvaru($kruznice);
vypisBarvuTvaru($ctverec);
