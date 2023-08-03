<?php
//5x2 + 2x -20 =0
//retornar los valores positivos y negativos de x

function ecuaGeneralPosi(int $a, int $b, int $c){

$xPlus= (($b* -1) + sqrt($b**2-(4*$a*$c)))/(2*$a);
return $xPlus;
}
function ecuaGeneralNeg(int $a, int $b, int $c){
    $xNeg = (($b*-1)-sqrt(num:$b**2-(4*$a*$c)))/(2*$a);
    return $xNeg;
}
echo "X+=".ecuaGeneralPosi(5,2,-20). "<br> X-= ".ecuaGeneralNeg(5,2,-20);