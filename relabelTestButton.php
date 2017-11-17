<?php

    $btnText    = "TestScript";
    $btnLink    = "./relabelTestButton.php?btnRename=true";
    $args       = filter_input(INPUT_GET, 'btnRename');

    if (isset($args))
    {
        if ($args == 'true')
        {
            $btnText = "PHP wahr";
            $btnLink = "./relabelTestButton.php?btnRename=false";
        }
        else
        {
            $btnText = "PHP falsch";
            $btnLink = "./relabelTestButton.php?btnRename=true";
        }
    }

    echo "<button class='btn btn-danger' onclick='loadPHP(\"#testBtn\", \"$btnLink\")'>$btnText</button>";
?>

<!DOCTYPE html>
