<?php
$file = fopen("number.txt", "r+");
$line = fgets($file, 4096);
fclose($file);
$number = (int)$line;
$number++;
$fh = fopen( 'number.txt', 'w' );
fwrite($fh, $number);
fclose($fh);
echo "Merci d'avoir confirmé votre venue à la mise à l'eau du drakkar ! La Compagnie du Bátar vous attend le 12 Août prochain au lac de Saint Ferréol.";
?>