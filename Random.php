<?php
echo "NUMEROS ALERATORIOS"

$Aleratorio = [];
for($i = 0; $i < 50; $i++){
    $Aleratorio[$i] = rand(0 , 100);

     echo $Aleratorio[$i] . ", ";
}

?>