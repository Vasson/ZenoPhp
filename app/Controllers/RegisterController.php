<?php   

namespace App\Controllers;
use App\Models\User;

class RegisterController{
    public function index(){
        view('pages.register');
    }
    
    public function register(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
            if($_POST['name'] !='' && $_POST['email'] !='' && $_POST['pswd'] !='')
            {
                // echo "<pre>";
                // print_r($_POST);
                // exit; 
                $user = new User;
                $user->name = $_POST['name'];
                $user->email = $_POST['email'];
                $user->password = $_POST['pswd'];
        
                // echo "<pre>";
                // print_r($user->checkExistingUser($_POST['email']));
                // exit; 
                
                if($user->checkExistingUser($_POST['email'])){ ?>
                    <div class="alert alert-warning" role="alert">
                    Warning! User already exist.
                  </div> 
              <?php }else{
                  if($user->register()){
                        redirect('login');
                  }else{ ?>
                      <div class="alert alert-warning" role="alert">
                        Error! Please try again.
                      </div>
                  <?php } 
              }
            }else{ ?>
                <div class="alert alert-danger" role="alert">
                    Please fill the required fields.
                </div>
            <?php }
        }
        
    }
}