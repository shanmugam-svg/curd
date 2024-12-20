<?php

if(isset($_GET['id'])){
    


$link=mysqli_connect('localhost','root','','details');
if(!$link){
    die('Connection error'.mysqli_connect_error());
}

$id=$_GET['id'];

$query="SELECT * FROM personal WHERE id=$id";
$result=mysqli_query($link,$query);
$numrow=mysqli_num_rows($result);
if($numrow>0){
  while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name=$row['name'];
    $age=$row['age'];
    $mobile=$row['mobile'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-9">
<div class="card">
  <div class="card-header">
    <h1> Update Registration <h2>
  </div>
  <div class="card-body">
  <form action="update.php" method="POST">
  <div class="mb-3">
    <input type="hidden" name="id" value="<?php echo $id ?>">
  </div>
  <div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter name" value=<?php echo $name ?>>
  </div>
  <div class="mb-3">
    <label>Age</label>
    <input type="number" name="age" class="form-control" placeholder="Enter age" value=<?php echo $age ?>>
  </div>
  <div class="mb-3">
    <label>Mobile</label>
    <input type="number" name="mobile" class="form-control" placeholder="Enter mobile" value=<?php echo $mobile ?>>
  </div>
  <br>
  <button type="submit" name="submit" class="btn btn-primary" value="update">Submit</button>
</form>
    
  </div>
</div>
</body>
</html>

<?php
}

}
}else{
echo 'record not found';
}

?>