<?php
    $twoScores = explode(" ", fgets(STDIN));
    $aScore = (int) $twoScores[0];
    $bScore = (int) $twoScores[1];
    
    echo $aScore|$bScore;
?>