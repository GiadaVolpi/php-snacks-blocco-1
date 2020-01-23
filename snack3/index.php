<!-- Creare una funzione che restituisce un array con 15 numeri casuali, tenendo
conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$numeri_estratti = [];

while (count($numeri_estratti) < 15) {
    $num_generato = rand(1,100);

    if (in_array($num_generato, $numeri_estratti) == false) {
        $numeri_estratti[] = $num_generato;
    }
}

foreach ($numeri_estratti as $numero) {
    echo $numero . " - ";
}

?>
