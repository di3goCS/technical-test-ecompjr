<?php 

class HomeController{

    public function login(){
        header("location: /projetofinal/views/login.php");
    }

    public function home(){
        header("location: /projetofinal/views/home.php");
    }

    public function partnership(){
        header("location: /projetofinal/views/partnership.php");
    }
}