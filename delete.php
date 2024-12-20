<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];


$link=mysqli_connect('localhost','root','','details');
if(!$link){
    die('Connection error'.mysqli_connect_error());
}

$query="DELETE FROM personal WHERE id=$id";
$result=mysqli_query($link,$query);
if($result){
    echo 'record successfully deleted. <a href="index.php"> Go Back </a>';
}else{
    echo 'error while deleting record';
}

}

?>