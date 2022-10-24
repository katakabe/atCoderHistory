<?php
   $array = explode(" ", fgets(STDIN));
   $A = (int) $array[0];
   $B = (int) $array[1];
    
   echo number_format(($B / $A), 3);
?>