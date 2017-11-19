<?php 
    session_start();
    session_destroy();

    $backdirect = filter_input(INPUT_GET, 'redirectBack');

    if ($backdirect !== null)
    {
        header('Location: ' . $backdirect , true, 301);
        die();
    }

    header('Location: ./login.php' , true, 301);
    die();
?>
