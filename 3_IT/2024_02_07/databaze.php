<?php
try {
    $databaze = new PDO(
        'mysql:host=mariadb;dbname=skola',
        'root',
        'secret'
    );
    $databaze->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    die("Nepodarilo se pripojit k databazi: {$exception->getMessage()}");
}
return $databaze;
