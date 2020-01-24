<!-- Creare un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi: ogni volta che si incontra un punto, bisogna creare un nuovo paragrafo. -->


<?php

$documento = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis et ante eget hendrerit. Nam nec ultricies nisi, nec tincidunt justo. Nunc est augue, condimentum vel orci suscipit, fermentum molestie velit. In sit amet massa libero. Sed eu nisl eros. Nullam lorem felis, vulputate et quam sit amet, suscipit pulvinar ex. Maecenas ut tristique ligula. Vivamus porta, est molestie tempor sagittis, purus ex semper libero, ut efficitur felis sem eleifend erat. Suspendisse consequat massa non nisi bibendum, ut pretium orci scelerisque. Vivamus id tempus massa. Pellentesque quis risus ac eros posuere rutrum. Aliquam id metus ultricies, ornare dolor ac, pharetra turpis. Etiam mattis interdum varius. Quisque pharetra erat sed varius euismod. Quisque molestie pulvinar malesuada. Vestibulum eros magna, vestibulum ac euismod quis, consectetur ac purus. Etiam sit amet orci non leo malesuada eleifend. Sed varius aliquam velit, id molestie enim porta a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce sem tortor, tempus a ultrices sed, sollicitudin in tortor.";

$array = explode(".", $documento);

foreach ($array as $key => $value) {
    if ($value != "") {
        echo "<p>" . $value . ".</p>";
    }
}

?>
