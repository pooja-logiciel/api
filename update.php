<?php
  include('conf.php');
  $connection=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
  $id=$_GET['id'];
  $name=$_GET['name'];
  $marks=$_GET['marks'];
  $sql=$dbh->prepare("update first set name='$name', marks='$marks' where id=$id");
  $sql->execute();
 
?>