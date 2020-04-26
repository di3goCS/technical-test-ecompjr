<?php

class Company{

    private $id;
    private $name;
    private $federation;

    public function __construct($id, $name, $federation){
        $this->id = $id;
        $this->name = $name;
        $this->federation = $federation;
    }

    public static function create($name, $federation){
        $connection = Connection::getConnection();
        $check_query = "select * from companys where name='{$name}'";
        $check_result = mysqli_query($connection, $check_query);
        if (mysqli_num_rows($check_result) == 0){
            $query = "insert into companys(name, federation) values ('{$name}', '{$federation}')";
            $result = mysqli_query($connection, $query);
            if(!$result){
                return false;
            }
        } else {
            echo "Empresa já existe";
        }
        mysqli_close($connection);
    }

    public static function all(){
        $connection = Connection::getConnection();
        $query = "select * from companys";
        $result = mysqli_query($connection, $query);
        if(mysqli_num_rows($result) >= 1){
            for($i = 0; $i < mysqli_num_rows($result); $i++){
                $company = mysqli_fetch_assoc($result);
                $companies[$i] = new Company($company['id'], $company['name'], $company['federation']);
            }
            return $companies;
        } else {
            return false;
        }
        mysqli_close($connection);
        
    }

    public static function delete($id){
        $connection = Connection::getConnection();
        $query = "delete from companys where id='{$id}'";
        $result = mysqli_query($connection, $query);
        var_dump($result);
        if($result){
            echo "Empresa deletada com sucesso!";
        }
        mysqli_close($connection);
    }

    public static function find($id){
        $connection = Connection::getConnection();
        $query = "select * from companys where id = '{$id}'";
        $result = mysqli_query($connection, $query);
        if(mysqli_num_rows($result) == 1){
            $company = mysqli_fetch_assoc($result);
            return new Company($company['id'], $company['name'], $company['federation']);
        } else {
            return false;
        }
        mysqli_close($connection);
    }

    public static function update($id, $name, $federation){
        $connection = Connection::getConnection();
        // Esse trecho aqui é só pra evitar que burlem o requisito
        // de empresas com o mesmo nome, atualizando.
        if ($name == null || $federation == null){
            return false;
        } else {
            $check_query = "select * from companys where name='{$name}'";
            $check_result = mysqli_query($connection, $check_query);
            if (mysqli_num_rows($check_result) == 0){
                $query = "update companys set name='{$name}', federation='{$federation}' where id='{$id}'";
                $result = mysqli_query($connection, $query);
                if ($result){
                    echo "Empresa atualizada com sucesso!";
                } else{
                    return $result;
                }
            }
        }
        
        mysqli_close($connection);
    }


    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getFederation(){
        return $this->federation;
    }
    
    public function setId($id){
        return $this->id = $id;
    }

    public function setName($name){
        return $this->name = $name;
    }

    public function setFederation($federation){
        return $this->federation = $federation;
    }   
}