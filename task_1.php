<?php
function isValidTriangle(int $a, int $b, int $c): bool {
    $a = (double)$a;
    $b = (double)$b;
    $c = (double)$c;


    if(($a + $b > $c) &&
        ($a + $c > $b) &&
        ($b + $c > $a))
    {
        return true;
    }
    else
    {
        return false;
    }

}