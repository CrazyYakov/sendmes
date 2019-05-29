<?php
    require 'config.php';
    require 'Models\\User.php';
    require 'Models\\Message.php';
    
    switch ($_GET['action']) {        
        case 'listUsers';
            listUsers();
            break;
        case 'deleteUser':
            deleteUser();
            break;
        case 'deleteLastMessage':
        deleteLastMessage($numberfor);
            break;
        case 'getMessages':
            getMessages();
            break;
        default:
            homepage();
            break;
    }

    function homepage()
    {
        header("Location: ".PATH."template\\message.php");
    }
    function registration()
    {
        $data = new User($_POST['username'], $_POST['password']);
        if ($data::insertUser()){
            $status = "Вы успешно зарегестрировались";
            authentication();            
        }else 
        $status = "Простите, но что-то пошло не так";
        header("template\\registrationForm.php");
    }
    function authentication()
    {
        $data = new User($_POST['username'], $_POST['password']);
        if($data::getUser()){
            $_SESSION['username'] = $data['login'];
            $_SESSION['password'] = $data['password'];
            header("template\\message.php");
        }else $status = "не удалось Аутентифицироваться";
        header("template\\registrationForm.php");
    }
    function listUsers()
    {
        $data = new User();
        $result = $data::listUsers();        
    }
    function deleteUser()
    {
        $data = new User($_GET['username']);
    }
    
?>