<!-- Utilizzare questo array: https://pastebin.com/CkX3680A.
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i
PM in un rettangolo verde. -->
<?php

$db = [
    "teachers" => [
        [
            "name" => "Michele",
            "lastname" => "Papagni"
        ],
        [
            "name" => "Sofia",
            "lastname" => "Perlari"
        ]
    ],
    "pm" => [
        [
            "name" => "Roberto",
            "lastname" => "Marazzini"
        ],
        [
            "name" => "Federico",
            "lastname" => "Pellegrini"
        ]
    ]
];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Teachers and pm</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <?php
            foreach ($db as $incarico => $persone) {
                echo $incarico . ": ";
                if ($incarico == "teachers") {
                    ?>
                    <div class="insegnanti">
                        <?php
                        foreach ($persone as $persona) {
                            echo $persona["name"] . " ";
                            echo $persona["lastname"] . " ";
                        }
                        ?>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="pm">
                        <?php
                        foreach ($persone as $persona) {
                            echo $persona["name"] . " ";
                            echo $persona["lastname"] . " ";
                        }
                        ?>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </body>
</html>
