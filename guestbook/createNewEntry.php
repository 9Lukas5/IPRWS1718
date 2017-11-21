<?php
    session_start();
    include 'dbVar.php';

    $entryTitel = filter_input(INPUT_POST, 'entryTitel');
    $entryText  = filter_input(INPUT_POST, 'entryText');
    $user  = $_SESSION['userid'];

    if (!$user)
    {
        http_response_code(403);
        die();
    }

    if (!$entryText)
    {
        http_response_code(420);
        die();
    }

    $query = "INSERT INTO $dbDatabase.GUESTBOOK (USER, TITEL, CONTENT) VALUES ('$user', ";

    if (!$entryTitel)
    {
        $query = $query . "NULL, ";
    }
    else
    {
        $query = $query . "'$entryTitel', ";
    }

    $query = $query . "'$entryText')";

    if ($db->query($query))
    {
        http_response_code(200);
        die();
    }
    else
    {
        http_response_code(500);
        die();
    }

?>
