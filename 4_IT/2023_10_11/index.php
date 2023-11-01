<?php
// -----------------------------------------------------------------
// Proměnné
// -----------------------------------------------------------------

// Název proměnné začíná vždy znakem dolar ($). Neuvádíme datový
// typ, následuje operátor přiřazení a hodnota.
$krestniJmeno = "Jan";
$desetinneCislo = 3.14;

// Datový typ proměnné lze měnit přetypováním - uvedením nového
// typu před hodnotu. Pozor, ne všechny typy lze typovat mezi sebou,
// u některých může dojít k nečekanému chování - např. příklad
// níže "zahodí" desetinnou část, kterou už nelze zpětně získat.
$celeCislo = (int) $desetinneCislo;
$desetinneCislo2 = (float) $celeCislo; // 3.0

// -----------------------------------------------------------------
// Funkce pro výpis
// -----------------------------------------------------------------

// echo - vypíše řetězec předaný v argumentu. Můžeme takto vypsat
// řetězec spolu s hodnotou proměnné. Pokud chceme vypsat proměnnou,
// v některých případech je nutné "obalit" ji složenými závorkami,
// v tomto případě jsou nadbytečné, ale nepřekáží.
echo("<p>Ahoj, {$krestniJmeno}!</p>");

// Pokud místo uvozovek použijeme apostrofy, argument vypíšeme
// doslovně.
echo('<p>Ahoj, {$krestniJmeno}!</p>');

// var_dump - vypíše včetně typu a délky proměnné
var_dump("toto je string");

// -----------------------------------------------------------------
// Superglobální proměnné
// -----------------------------------------------------------------

// Proměnné, které jsou při běhu skriptu předdefinované interpretem,
// obsahují užitečné informace (info o serveru, HTTP požadavku,
// cookies, ...)
// Proměnné jsou typu array (asociativní pole).

// $_GET obsahuje HTTP parametry předávané za otazníkem, např:
// index.php?jmeno=Jan&vek=23
var_dump($_GET);