<?php
    $all = fgets(STDIN);
    $nums = explode(" ", fgets(STDIN));
    $result = 0;
    
    for($i = 0; $i < $all; $i++) {
        $result += (int) $nums[$i];    
    }
    
    echo $result;
?>