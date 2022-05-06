
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Student Registration Portal</title>
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
  </head>
  <body>
 
 <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">STUDENT REGISTRATION PORTAL</span>
    <?php 
    if(isset($_SESSION['username'], $_SESSION['password'])) {
    ?>
    <a href="logout.php">Log Out <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>
    <?php } ?>
  </div>
 
 
  </nav>
