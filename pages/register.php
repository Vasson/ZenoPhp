<?php include_once('include/header.php');?>
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
  <h2>Registration Form</h2>
  <p>* Required fields</p>
  <form action="submit-register" method="post">
    <div class="mb-3 mt-3">
      <label for="name">* Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">* Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">* Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="login" class="btn btn-secondary">Login</a>
  </form>
        </div>
  </div>
</div>
<?php include_once('include/footer.php');?>
