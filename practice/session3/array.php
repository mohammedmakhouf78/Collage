<?php


$x = [12,1,51,1,51,51,1,1,6,48,89,6,6];

// for($i = 0;$i < count($x) ; $i++)
// {
//     echo "<h1>". $x[$i] . " </h1>";
// }


// $x = [
//     'name' => "mohammed",
//     'age' => 15,
//     'gender' => true,
// ];

// foreach($x as $key => $item)
// {
//     echo $key . " " . $item;
//     echo "<br>";
// }



$colors = array('white', 'green', 'red', 'blue', 'black');

// echo "<ul>";

// foreach($colors as $color)
// {
//     echo "<li>$color</li>";
// }

// echo "</ul>";

?>

<ul>
    <?php foreach($colors as $color): ?>
    <li><?= $color ?></li>
    <?php endforeach; ?>
</ul>