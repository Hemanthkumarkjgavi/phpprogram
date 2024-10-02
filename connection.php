<?php
$mysql=new mysqli("localhost","root","","testdb");
if(isset($_POST['save'])){
    $tdo=$_POST['tdo'];
    $mysql->query("INSERT INTO data(todo)VALUES('$tdo')");
    header ("locatin:index.php");
}
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $mysql->query("DELETE FROM data WHERE id=$id");
}
?>