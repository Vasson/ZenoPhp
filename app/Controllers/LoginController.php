<?php   

namespace App\Controllers;
use App\Models\User;

class LoginController{
    public function index(){
        view('pages.login');
    }
    
    public function login(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
            if($_POST['email'] !='' && $_POST['pswd'] !='')
            {
                // echo "<pre>";
                // print_r($_POST);
                // exit; 
                $user = new User;
                $user->email = $_POST['email'];
                $user->password = $_POST['pswd'];
                
                  if($user->login()){
                      $_SESSION['user_id'] = $user->id;
                      $_SESSION['user_name'] = $user->user_name;
                      redirect('dashboard');
                  }else{ ?>
                      <div class="alert alert-warning" role="alert">
                        Error! Please try again.
                      </div>
                  <?php } 
            }
            else{ ?>
                <div class="alert alert-danger" role="alert">
                    Please fill the required fields.
                </div>
            <?php }
        }
        
    }
}