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
            echo $users;
            $ascendente = asort($users);
            $descendente = arsort($users);


            echo "<h2><center>Listados de usuarios activos</center></h2>";

            echo "<h3>Lista ascendente:</h3>";

            foreach($user as $key => $val) {
                echo "$key = $val\n";
            }



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
