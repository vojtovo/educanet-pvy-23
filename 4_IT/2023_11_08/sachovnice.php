<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td {
            width: 10px;
            height: 10px;
        }
    </style>
</head>
<body>
    <table>
        <?php
            $size = 8;

            for ($i = 0; $i < $size; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $size; $j++) {
                    $color = 'white';

                    if (($j + $i) % 2 == 0) {
                        $color = 'black';
                    }

                    echo "<td style='background: {$color}'></td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>