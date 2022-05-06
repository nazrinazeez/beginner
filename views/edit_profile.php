
<?php 
  session_start();
  include 'functions.php';
?>
 <!doctype html>
 <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Student Registration Portal</title>
    <link href="../assets/css/main.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">
  </head>
  <body>
 
 <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">STUDENT REGISTRATION PORTAL</span>
  </div>
  </nav>

  <div class="container pt-3">
  <section class="center-text">
  <div class="login-form box-center">
      <?php 
            if(isset($_SESSION['errprompt'])) {
             showError();
            }
      ?>
      <form action="../includes/profile_modal.php" method="post">
      <div class="mb-3">
          <label for="exampleInputName" class="form-label">User Name</label>
          <input type="name" name="uid" disabled="disabled" class="form-control" value="<?php echo $_SESSION['details']['username'] ?>" id="exampleInputName">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" value="<?php echo $_SESSION['details']['email'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="mobileNumber" class="form-label">Mobile Number</label>
          <input type="mobileNumber" name="mobile_num" value="<?php echo $_SESSION['details']['mobilenumber'] ?>" class="form-control" id="mobileNumber">
        </div>
        <div class="mb-3">
        <a href="">Change Password</a>
        </div>
        <div class="cust_right">
        <button type="submit" name="submit" class="btn btn-primary">Save Details</button>
        </div>
        
      </form>
  </div>

  </section>
  </div>

  <?php
  unset($_SESSION['errprompt']);
  include 'footer.php'; ?>