<?php
  session_start();
  include 'views/header.php'; 
  include 'views/functions.php';
?>
 
  <div class="container pt-3">
  
  <section class="center-text">
    
  <div class="login-form box-center">
    <?php 
            if(isset($_SESSION['prompt'])) {
              showPrompt();
            }
    
            if(isset($_SESSION['errprompt'])) {
              showError();
            }
      ?>
    
      <form action="includes/login_modal.php" method="POST">
        <div class="mb-3">
          <label for="exampleInputName" class="form-label">Name</label>
          <input type="name" name="uid" class="form-control" id="exampleInputName">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="pwd" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
        <a href="/projects/demo/registration.php">Register?</a>
        </div>
        <div class="cust_right">
        <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </div>
        
      </form>
  </div>

  </section>
  </div>


  <?php 
  unset($_SESSION['prompt']);
  unset($_SESSION['errprompt']);
  include 'views/footer.php'; ?>