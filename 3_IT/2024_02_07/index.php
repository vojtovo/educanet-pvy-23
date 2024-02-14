<?php
$databaze = require_once 'databaze.php';
$sql = 'SELECT * FROM ucitele WHERE prijmeni LIKE :prijmeni';

$dotaz = $databaze->prepare($sql);
$dotaz->execute([
    ':prijmeni' => '%K%',
]);
$ucitele = $dotaz->fetchAll();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Křestní jméno</th>
                    <th>Příjmení</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ucitele as $ucitel) { ?>
                    <tr>
                        <td><?= $ucitel['id'] ?></td>
                        <td><?= $ucitel['krestni_jmeno'] ?></td>
                        <td><?= $ucitel['prijmeni'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>