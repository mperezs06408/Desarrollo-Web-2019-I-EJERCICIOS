<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sesión</title>
</head>
<body>
   <?php
    $users = [
        'santiago' => '1234',
        'natalia' => '9876',
        "daniela" =>'1928',
    ];


    if (isset($users[$_POST['user']])){
        if ($users[$_POST['user']]== $_POST['password']){
            session_start();


            echo "<h2><center>Listados de usuarios activos</center></h2>";

            echo "<h3>Lista por defecto:</h3>";

            print_r($users);


            sort($users);
            echo "<h3>Lista ascendente:</h3>";

            print_r($users);


            arsort($users);
            echo "<h3>Lista descendente:</h3>";

            print_r($users);

        } else {
            echo 'Contraseña incorrecta';
            header('location:index.php');

        }
    } else {
        echo 'Datos incorrectos';
        header('location:index.php');
    }
?>
</body>
</html>
