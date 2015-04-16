<?php
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: http://konetix.pl');
include 'database.php';
class upload{
  static protected $mysqli;
  function __construct($db){
   self::$mysqli=$db;
  }
  public function start(){
  if($_POST['typ']==1){
   $save=new save();
   $save->save();
  }
  if($_POST['typ']==2){
   $remove=new remove();
   $remove->remove();
  }
 }
 function ret($a){
  echo $_GET['callback'].'('.json_encode($a).')';
 }
}
class save extends upload{
 private $t;
 private $a;
 private $y;
 private $p;
 private $c;
 function __construct(){
  $this->t = parent::$mysqli->real_escape_string($_POST['t']);
  $this->a = parent::$mysqli->real_escape_string($_POST['a']);
  $this->y = intval($_POST['y']);
  $this->p = parent::$mysqli->real_escape_string($_POST['p']);
  $this->c = parent::$mysqli->real_escape_string($_POST['c']);
 }
 protected function save(){
  if(!(strlen($this->t)>=2&&strlen($this->a)>=3&&!is_nan($this->y)&&strlen($this->p)>=2&&strlen($this->c)<250&&$this->y>-10000&&$this->y<=intval(date("Y")))){
   parent::ret(array('error'=>1));
   return;
  }
  parent::$mysqli->query("INSERT INTO `books` (`title`, `author`, `year`, `publisher`, `comment`) VALUES ('$this->t','$this->a',$this->y,'$this->p','$this->c')") or die(parent::$mysqli->error);
  $arr=array_map('htmlspecialchars',array(1,$this->t,$this->a,$this->y,$this->p,$this->c,parent::$mysqli->insert_id));
  parent::ret($arr);
 }
}
class remove extends upload{
 private $id;
 function __construct(){
  $this->id=intval($_POST['id']);
 }
 protected function remove(){
  if(is_nan($this->id)||$this->id<1){
   parent::ret(array('error'=>1));
   return;
  }
  parent::$mysqli->query("DELETE FROM `books` WHERE `id`=".$this->id) or die(parent::$mysqli->error);
  parent::ret(array(2,$this->id));
 }
}
$induct=new upload($mysqli);
$induct->start();
$mysqli->close();

?>
