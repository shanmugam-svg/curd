<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $mobile=$_POST['mobile'];
}

$link=mysqli_connect('localhost','root','','details');
if(!$link){
    die('Connection error'.mysqli_connect_error());
}

$query="INSERT INTO personal(name,age,mobile) values('$name','$age','$mobile')";
$result=mysqli_query($link,$query);
if($result){
    echo 'record successfully inserted. <a href="index.php"> Go Back </a>';
}else{
    echo 'error while inserting record';
}

?>