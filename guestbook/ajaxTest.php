<?php
    $input = filter_input_array(INPUT_POST);

    foreach ($input as $key => $value)
    {
        echo $value;
    }
?>
