<?php 
//Código que lê 3 valores e calcula bhaskara se possível
echo "Entre com os três coeficientes da equação: a=";

$a = intval(fgets(STDIN));

while ($a==0 || $a<0)  {
    echo " o coeficiente a deve ser maior do que 0.";
    $a = intval(fgets(STDIN)) ;
}

echo "coeficiente a= $a. b= ";
$b = intval(fgets(STDIN));
echo "coeficiente b= $b. c = ";
$c = intval(fgets(STDIN));
echo "coeficiente c= $c.     ";

//calculado Delta

$D = $b**2-4*$a *$c; 

if ($D < 0) {
    echo "Delta = $D, Esta equação não possui raiz real.    ";
} else{
    echo "Delta = $D, a equação $a x^2+ $b x + $c possui raiz real.       ";

$x1 = (- $b + $D ** (1/2)) / 2* $a;
$x2 = (- $b - $D ** (1/2)) / 2* $a;

echo "As raízes são x1 = $x1 e x2 = $x2";
}
?>