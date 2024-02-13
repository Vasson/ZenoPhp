<?php 
include_once('include/header.php');

if(isset($_GET['login']) && $_GET['login'] == 'success'){ 
    if(isset($_SESSION['user_name'])){
    ?>
    <div class="alert alert-success" role="alert">
        Welcome, <?php echo $_SESSION['user_name'];?>
    </div>
<?php }}
?>
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
  <h2>User Dashboard</h2>
  <a href="logout" class="btn btn-secondary">Logout</a>
    </div>
  </div>
</div>
<?php include_once('include/footer.php');?>