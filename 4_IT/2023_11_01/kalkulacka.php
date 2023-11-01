<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulačka</title>
</head>
<body>
    <?php
    $cislo1 = $_GET['prvniCislo'];
    $cislo2 = $_GET['druheCislo'];
    $vysledek = '';

    if ($_GET['operace'] === 'secti') {
        $vysledek = $cislo1 + $cislo2;
    } else if ($_GET['operace'] === 'odecti') {
        $vysledek = $cislo1 - $cislo2;
    } else if ($_GET['operace'] === 'vynasob') {
        $vysledek = $cislo1 * $cislo2;
    } else if ($_GET['operace'] === 'vydel') {
        if ($cislo2 != 0) {
            $vysledek = $cislo1 / $cislo2;
        } else {
            echo "<p style='color: red'>Nulou nelze dělit!</p>";
        }
    }
    ?>

    <form>
        <input name="prvniCislo" value="<?= $cislo1 ?>">
        <select name="operace">
            <option <?= $_GET['operace'] === 'secti' ? 'selected' : '' ?> value="secti">+</option>
            <option <?= $_GET['operace'] === 'odecti' ? 'selected' : '' ?> value="odecti">-</option>
            <option <?= $_GET['operace'] === 'vynasob' ? 'selected' : '' ?> value="vynasob">*</option>
            <option <?= $_GET['operace'] === 'vydel' ? 'selected' : '' ?> value="vydel">/</option>
        </select>
        <input name="druheCislo" value="<?= $cislo2 ?>">
        <button>=</button>
        <input value="<?= $vysledek ?>" readonly>
    </form>
</body>
</html>