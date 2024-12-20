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
    <h1> Registration <h2>
  </div>
  <div class="card-body">
  <form action="insert.php" method="POST">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter name">
  </div>
  <div class="mb-3">
    <label>Age</label>
    <input type="number" name="age" class="form-control" placeholder="Enter age">
  </div>
  <div class="mb-3">
    <label>Mobile</label>
    <input type="number" name="mobile" class="form-control" placeholder="Enter mobile">
  </div>
  <br>
  <button type="submit" name="submit" class="btn btn-primary" value="submit">Submit</button>
</form>
    
  </div>
</div>
  
    
</body>
</html>