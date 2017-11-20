<?php
    $input = filter_input_array(INPUT_POST, FILTER_FLAG_NONE);
    foreach ($input as $key => $value)
    {
        echo $value;
    }
    echo $_POST['alertText'];
?>
