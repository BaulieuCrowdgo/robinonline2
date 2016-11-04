<?php
/**$file = fopen("status.txt", "r+");
$line = fgets($file, 4096);
fclose($file);
$number = (int)$line;
$number++;
$fh = fopen( 'status.txt', 'w' );
fwrite($fh, $number);
fclose($fh);**/

$file = fopen("status.txt", "r+");
$line = fgets($file, 4096);
fclose($file);
$status = $line == 'true'? true: false;
header('Content-Type: application/json');
echo json_encode($status);
?>
