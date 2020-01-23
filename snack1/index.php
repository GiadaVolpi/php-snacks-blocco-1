<!-- Passare come parametri GET “name”, “mail” e “age” e verificare (cercando i
metodi che non conosciamo nella documentazione) che:
● “name” sia più lungo di 3 caratteri;
● “mail” contenga un punto e una chiocciola;
● “age” sia un numero.
Se tutto è ok, stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$nome = $_GET["name"];
$mail = $_GET ["mail"];
$eta = $_GET ["age"];


// $lunghezza_nome = strlen($nome);
// if($lunghezza_nome > 2 && $lunghezza_nome < 10) {
//     echo "Ciao $nome";
//     echo "<br>";
// } else {
//     echo "Hai inserito un nome sbagliato";
//     echo "<br>";
// }
//
//
// if ($eta > 0 && $eta < 100) {
//     echo "Hai $eta anni";
//     echo "<br>";
// } else {
//     echo "Hai inserito un'età sbagliata";
//     echo "<br>";
// }
//
//
// $posizione_punto = strpos($mail, ".");
// $posizione_chiocciola = strpos($mail, "@");
// if ($posizione_punto !== false && $posizione_chiocciola !== false) {
//     echo "Il tuo indirizzo $mail è valido";
//     echo "<br>";
// } elseif ($posizione_punto === false) {
//     echo "Nell'email manca il punto";
//     echo "<br>";
// } else {
//     echo "Nell'email manca la chiocciola";
//     echo "<br>";
// }
//
//
// if ($mail === true && $eta === true && $mail === true) {
//     echo "Accesso riuscito!!";
// } else {
//     echo "Accesso negato";
// }

if(strlen($nome) > 3 && strpos($mail, ".") !== false && strpos($mail, "@") !== false && is_numeric($eta)) {
    echo "Accesso riuscito!!";
} else {
     echo "Accesso negato";
}

?>
