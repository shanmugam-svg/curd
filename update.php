<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $mobile=$_POST['mobile'];
    $id=$_POST['id'];
}

$link=mysqli_connect('localhost','root','','details');
if(!$link){
    die('Connection error'.mysqli_connect_error());
}

$query="UPDATE `personal` SET `name`='$name',`age`='$age',`mobile`='$mobile' WHERE id=$id";
$result=mysqli_query($link,$query);
if($result){
    echo 'record successfully updated. <a href="index.php"> Go Back </a>';
}else{
    echo 'error while updating record';
}

?>