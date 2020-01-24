<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
<?php

$classe = [
    [
        "nome" => "Pippo",
        "cognome" => "Rossi",
        "voti" => [
            8, 7, 5, 6
        ]
    ],
    [
        "nome" => "Paperino",
        "cognome" => "Bianchi",
        "voti" => []
    ],
];

foreach ($classe as $alunno) {
    // var_dump ($alunno);
    echo "<br>";
    echo $alunno["nome"] . " ";
    echo $alunno["cognome"];
    $somma = 0;
    foreach ($alunno["voti"] as $voto) {
        $somma = $somma + $voto;
    }
    $nVoti = count($alunno["voti"]);
    if ($nVoti != 0) {
        $media = $somma / $nVoti;
        echo " media voti: " . $media;
    } else {
        echo " Non hai nessun voto";
    }
}

?>
