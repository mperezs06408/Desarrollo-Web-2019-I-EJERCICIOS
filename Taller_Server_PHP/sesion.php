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

            $ascendente = $users.asort();
            $descendente = $users.arsort();
            echo 'alert("Sesión iniciada")';

            echo "<h2><center>Listados de usuarios activos</center></h2>";

            echo "<h3>Lista ascendente:</h3>";

            echo "<ul>"
            for ($i = 0; $i < sizeOf($users)){
                echo "<li> $ascendente[$i]";
            }
            echo "</ul>"
        } else {
            echo 'alert("Contraseña incorrecta")';
            header('location:index.php');

        }
    } else {
        echo 'alert("Datos incorrectos")';
        header('location:index.php');
    }
?>
</body>
</html>
