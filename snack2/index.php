<!-- Creare un array di array: ogni array figlio avrà come chiave una data in questo
formato: DD-MM-YYYY (es 01-01-2007) e come valore un array di post
associati a quella data.
Stampare ogni data con i relativi post.

Qui l’array di esempio:
https://www.codepile.net/pile/R2K5d68z -->

<?php

$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

echo "<pre>";
foreach ($posts as $data => $posts_giornalieri) {
    echo "<br>";
    echo "<h2>In data: " . ($data) . "</h2>";

    foreach ($posts_giornalieri as $post) {
        echo "<h3>" . $post["title"] . "</h3>";
        echo "<em>" . $post["author"] . "</em>";
        echo "<p>" . $post["text"] . "</p>";
    }
}
echo "</pre>";


?>
