<?php
include 'database.php';
class book{
 private $result;
 private $mysqli;
 function __construct($db){
  $this->mysqli=$db;
 }
 function get(){
  $this->result = $this->mysqli->query("SELECT * FROM `books`") or die($this->mysqli->error);
  if(!$this->result->num_rows){
   echo '<tr><td width=100% colspan=7 style="text-align:center">-- Brak wyników --</td></tr>';
   return;
  }
  $i=0;
  while($row = $this->result->fetch_array(MYSQLI_ASSOC)){
   $i++;
   $row=array_map('htmlspecialchars',$row);
   echo '<tr id="row'.$row['id'].'" class="row'.($i%2?1:2).'" style="text-align:center"><td width="35" style="text-align:left">'.$i.'.</td><td width="120">'.$row['title'].'</td><td width="100">'.$row['author'].'</td><td width="125">'.abs($row['year']).' r.'.(intval($row['year'])<0?' p.n.e.':'').'</td><td width="150">'.$row['publisher'].'</td><td width="280">'.$row['comment'].'</td><td width="50"><div class="delbut" onclick="delbook('.$row['id'].')">[X]</div></td></tr>';
  }
 }
}
$induct=new book($mysqli);
$induct->get();
$mysqli->close();
?>
