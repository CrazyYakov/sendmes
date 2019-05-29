<?php 
use  System\core\DB;

class User extends Models
{   
    public function __construct() {
                
    }

    public function addUser($user, $password)
    {        
            $login = $user;
            $password = $password;     
           
            $sql_QueryInsert = "INSERT INTO users (login, password, dateadd) VALUES($login, $password, CURRENT_TIMESTAMP())";
            $result = mysqli_query(Models::inizializate(), $sql_QueryInsert);
            if($result) return true;
            else return false;
    }

    public function delete()
    {       
            $sql_dropUser = "DELETE FROM users where login = $this->login";
            $query = mysqli_query(Models::inizializate(), $sql_dropUser);
            if(!$query) return  false;
            else return true;
    }
 
    public function getUser()
    {        
        $sql_selectUser = "SELECT * FROM users WHERE login = $this->login AND password = $this->password";
        if(! $sql_result = mysqli_query(Models::inizializate(),$sql_selectUser)) return  false;
        return mysqli_fetch_assoc($sql_result);
    }

    public function listUsers()
    { 
        $sql_query = "SELECT * FROM users";

        $result = mysqli_query(Models::inizializate(), $sql_query);
        if(!$query) return  false;
        return mysqli_fetch_assoc($result);
    }
    
    public function isEmpty($login)
    {   
        $this->login = $login;
        $sql_QuerySelect = "SELECT ID FROM users WHERE login = $this->login";
        
        return managmentUsers($sql_QuerySelect);
    }
}
?>