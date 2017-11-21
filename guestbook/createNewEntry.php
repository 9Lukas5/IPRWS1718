<?php
    session_start();
    include 'dbVar.php';

    $entryTitle = filter_input(INPUT_POST, 'entryTitle');
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

    if (!$entryTitle)
    {
        $query = $query . "NULL, ";
    }
    else
    {
        $query = $query . "'$entryTitle', ";
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
