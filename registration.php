
  <?php 
  session_start();
  include 'views/header.php'; 
  include 'views/functions.php';
 ?>
  <div class="container pt-3">
  <section class="center-text">
  <div class="login-form box-center">
      <?php 
            if(isset($_SESSION['errprompt'])) {
             showError();
            }
      ?>
      <form action="includes/register_modal.php" method="post">
      <div class="mb-3">
          <label for="exampleInputName" class="form-label">Name</label>
          <input type="name" name="uid" class="form-control" id="exampleInputName">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="mobileNumber" class="form-label">Mobile Number</label>
          <input type="mobileNumber" name="mobile_num" class="form-control" id="mobileNumber">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="pwd" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Confirm Password</label>
          <input type="password" name="pwd_confirm" class="form-control" id="confirmPassword">
        </div>
        <div class="mb-3">
        <a href="index.php">Login to continue</a>
        </div>
        <div class="cust_right">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
        
      </form>
  </div>

  </section>
  </div>

  <?php
  unset($_SESSION['errprompt']);
  include 'views/footer.php'; ?>