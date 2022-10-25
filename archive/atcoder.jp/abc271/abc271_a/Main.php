<?php
    $num = fgets(STDIN);
    echo str_pad(strtoupper(dechex($num)), 2, '0', STR_PAD_LEFT);
?>