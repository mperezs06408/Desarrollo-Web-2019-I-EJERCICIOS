<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $pass = [
        'santiago' => '1234',
        'daniel' => '1928374',
    ];

    if ($_GET['usser'] in $pass) {
        if ($pass[$_GET['usser']]== $_GET['pass']){
            echo 'Datos correctos';
        } else {
            echo 'Contraseña incorrecta';
        }
    } else {
        echo 'datos incorrectos';
    }

    ?>
</body>
</html>
