<?php
    $users = [ 
        'santiago' => '1234',
        'natalia' => '9876',
    ];
    
    if (isset($users[$_POST['user']])){
        if ($users[$_POST['user']]== $_POST['password']){
            session_start();
            echo 'sesiòn iniciada';
            
        } else {
            echo 'Contraseña incorrecta';
            header('location:index.php');

        }
    } else {
        header('location:index.php');
        echo 'datos incorrectos';
    }
?>
