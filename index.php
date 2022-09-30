<?php
  include('conf.php');
  if(isset($_GET['name'])&& isset($_GET['marks']))
  {
      $name=$_GET['name'];
      $marks=$_GET['marks'];
      $sql=$dbh->prepare("insert into first (name,marks)values ('$name',$marks)");
      $sql->execute();
  }
  else if(isset($_GET['did']))
  {
      $id=$_GET['did'];
      $sql=$dbh->prepare("delete from first where id =$id");
      $sql->execute();
  }
  else if(isset($_GET['display']))
  { 
  	$display=$_GET['display'];
   
    $sql=$dbh->prepare("select * first  where id=$display");
    $sql->execute();
  }
  // else
  // {
  // 	echo "not found";
  // }
?>