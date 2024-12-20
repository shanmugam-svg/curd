<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<button type="button" class="btn btn-primary"><a href="add.php" class="text-light">Add New</a></button>
<div class="container">
<div class="row">
<div class="col-md-9">
<div class="card">
  <div class="card-header">
    <h1> curd application <h2>
  </div>
  <div class="card-body">
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Mobile</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $link=mysqli_connect('localhost','root','','details');
        if(!$link){
            die('Connection error'.mysqli_connect_error());
        }
        
        $query="SELECT * FROM personal";
        $result=mysqli_query($link,$query);
        $numrow=mysqli_num_rows($result);
        if($numrow>0){
          while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $age=$row['age'];
            $mobile=$row['mobile'];
  
    ?>

    <tr>
      <td> <?php echo $id ?> </td>
      <td> <?php echo $name ?> </td>
      <td> <?php echo $age ?> </td>
      <td> <?php echo $mobile ?> </td>

      <td>

      <button type="button" class="btn btn-success"><a href='edit.php?id= <?php echo $id ?>' class="text-light">Edit</a></button>
      <button type="button" class="btn btn-danger"><a href='delete.php?id= <?php echo $id ?>' class="text-light">Delete</a></button>

      </td>
      
    </tr>

    <?php

     }
}else{
  echo 'record not found';
}

    ?>

  </tbody>
</table>
    
  </div>
</div>
  
    
</body>
</html>