<?php
    $users = [ 
        'santiago' => '1234',
        'natalia' => '9876',
    ];
    
    if (isset($users[$_GET['user']])){
        if ($users[$_GET['user']]== $_GET['password']){
            session_start();
            echo 'sesiòn iniciada';
            
        } else {
            header('location:index.php');
            echo 'Contraseña incorrecta';
        }
    } else {
        header('location:index.php');
        echo 'datos incorrectos';
    }
?>
