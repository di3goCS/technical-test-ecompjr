<?php

class CompanyController{
    
    public function index(){
        header("location: /projetofinal/views/admin/company/index.php");
    }

    public function create(){
        header("location: /projetofinal/views/admin/company/create.php");
    }

    public function store(){
        if($_POST['name'] == null || $_POST['federation'] == null){
            header("location: /projetofinal/views/admin/company/create.php");
        } else {
            $company = Company::create($_POST['name'], $_POST['federation']);
            header("location: /projetofinal/views/admin/company/index.php");
        }
    }

    public function edit($id){
        echo $id[0];
        header("location: /projetofinal/views/admin/company/edit.php?id={$id[0]}");
    }

    public function update($id){
        if($_POST['name'] == null || $_POST['federation'] == null){
            header("location: /projetofinal/views/admin/company/edit.php?id={$id[0]}");
        } else {
            $company = Company::update($id[0], $_POST['name'], $_POST['federation']);
            header("location: /projetofinal/views/admin/company/index.php");
        }
    }
        

    public function delete($id){
        Company::delete($id[0]);
        header("location: /projetofinal/views/admin/company/index.php");
    }

    public static function all(){
        return Company::all();
    }
}