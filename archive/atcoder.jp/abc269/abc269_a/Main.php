<?php
    $nums = explode(" ", fgets(STDIN));
    $num1 = (int) $nums[0];
    $num2 = (int) $nums[1];
    $num3 = (int) $nums[2];
    $num4 = (int) $nums[3];
    
    echo ($num1 + $num2) * ($num3 - $num4) . "\n" . 'Takahashi';
?>