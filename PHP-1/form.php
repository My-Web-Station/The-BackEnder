<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Simple Form Submission</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
<form method="GET" action="response.php">
  Name: <input type="text" class="mb-3" name="fname"><br>
  Email: <input type="text" class="mb-3" name="email"><br>
  Phone: <input type="number" class="mb-3" name="phone"><br>
  Age: <input type="number"  class="mb-3" name="age"><br>
  <input type="submit" class="btn btn-warning" id="btn">
   
</form>
</div>
<div class="col-md-4"></div>
</div>
</div> 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>