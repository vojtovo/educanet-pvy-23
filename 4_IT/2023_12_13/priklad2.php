<?php
abstract class Vozidlo
{
    protected string $barva;
    protected float $maximalniRychlost;
    protected int $pocetKol;

    public function __construct(
        string $barva,
        float $maximalniRychlost,
    ) {
        $this->barva = $barva;
        $this->maximalniRychlost = $maximalniRychlost;
    }

    public function getBarva(): string
    {
        return $this->barva;
    }

    public function setBarva(string $barva): void
    {
        $this->barva = $barva;
    }

    public function getMaximalniRychlost(): float
    {
        return $this->maximalniRychlost;
    }

    public function getPocetKol(): int
    {
        return $this->pocetKol;
    }

    public function __toString(): string
    {
        $o  = "Max.rychlost: {$this->maximalniRychlost} km/h\n";
        $o .= "Barva:        {$this->barva}\n";
        $o .= "Počet kol:    {$this->pocetKol}\n";
        return $o;
    }

}

final class OsobniAutomobil extends Vozidlo
{
    protected int $pocetKol = 4;
}

final class Motocykl extends Vozidlo
{
    protected int $pocetKol = 2;
}

function vypisInfo(string $nazev, Vozidlo $vozidlo): void {
    echo "- {$nazev}\n";
    echo "{$vozidlo}";
    echo "\n";
}
vypisInfo('Volkswagen', new OsobniAutomobil('modrá', 250));