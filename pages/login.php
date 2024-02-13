<?php 
include_once('include/header.php');

if(isset($_GET['logout']) && $_GET['logout']=='success'){ ?>
  <div class="alert alert-success" role="alert">
      You have logged out successfully.
  </div>
<?php }else if(isset($_GET['msg']) && $_GET['msg']=='success'){ ?>
  <div class="alert alert-success" role="alert">
      You have registered successfully. Please login.
  </div>
<?php }
?>
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
  <h2>Login Form</h2>
  <p>* Required fields</p>
  <form action="submit-login" method="post">
    <div class="mb-3 mt-3">
      <label for="email">* Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">* Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
    <a href="register" class="btn btn-secondary">Register</a>
  </form>
        </div>
  </div>
</div>
<?php include_once('include/header.php');?>