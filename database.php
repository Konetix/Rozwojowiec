<?php
$mysqli = new mysqli('localhost','virt103174_pokaz','project','virt103174_pokaz');
if ($mysqli->connect_errno) {
 printf("Nieudane połączenie: %s\n", $mysqli->connect_error);
 die();
}
$mysqli->query("SET NAMES 'utf8'");
?>
