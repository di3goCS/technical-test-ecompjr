<?php 

session_start();

class UserController{

    public function check(){
        $user = User::find($_POST['email'], $_POST['password']);
        if ($user != null){
            $_SESSION['loggedin'] = true;
            $_SESSION['name'] = $user->getName();
            header("location: /projetofinal/views/admin/dashboard.php");
        } else {
            header("location: /projetofinal/views/login.php");
        }
    }

    public static function verifyLogin(){
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            return true;
        } else {
            echo "Please log in first to see this page.";
            header("location: /projetofinal/views/login.php");
        }
    }

    public static function logout(){
        if(!isset($_SESSION)) { 
            session_start(); 
        } 
        setcookie(session_name(), '', 100);
        session_unset();
        session_destroy();
        $_SESSION = array();
        header("location: /projetofinal/views/home.php");
    }
}