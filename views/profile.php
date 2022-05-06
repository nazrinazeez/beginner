<?php 
  session_start();

  include 'header.php'; 
  include 'functions.php';

  if(isset($_SESSION['details'])) {

?>
<div class="container pt-3" style="margin-left: 30%;">
  <section class="center-text">
  <div class="login-form box-center">
        <div class="card border-primary" style="width:30rem;">
        <h5 class="card-header">Student Information</h5>
        <ul class="list-group list-group-flush">
            <?php
                echo "<li class='list-group-item '><strong>User Name  :</strong>  ".$_SESSION['details']['username']."</li>";
                echo "<li class='list-group-item '><strong>Mobile Number  :</strong>  ".$_SESSION['details']['mobilenumber']."</li>";
                echo "<li class='list-group-item '><strong>Email  :</strong>  ".$_SESSION['details']['email']."</li>";
            
            ?>
        </ul>
        <div class="card-body">
            <div class="row">
                <div class="col">
                  <a href="edit_profile.php" class="btn btn-primary">Edit Details</a>                    
                </div>
                <div class="col">
                <form action="../includes/delete_modal.php" method="POST">
                    <button type="submit" name="submit" class="btn btn-danger">Delete Profile</button>  
                </form>
                </div>
            </div>  
        </div>
        </div>
  </div>
  </section>
</div>
<?php


  } else {
    header("location:../index.php");
    exit;
  }

  unset($_SESSION['prompt']);
  include '../views/footer.php';

?>