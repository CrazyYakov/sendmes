<?php
class UserController 
{
    public static function registrtion()
    {
        $pageTitle = 'Регистрация';
        if (isset($_POST['submit'])) {
            
            $data = new User();
            if ($data = $data->addUser($_POST['username'], $_POST['password']) && $_POST['password'] == $_POST['confirmPassword'])
            {
                $_SESSION['username'] = $_POST['login'];
                $_SESSION['role'] = $data['role'];
                $pageTitle = 'Сообщение';
                $status['status'] = " <p class='alert alert-success'>Вы успешно зарегестрировались! </p>";
                require(DIR . '/template/user/message.php');    
            }
            $status['status'] = " <p class='alert alert-danger'>Не удалось зарегестрироваться!</p>";
            require(DIR . '/template/user/register.php');
            $status['status'] = "";
        }else require(DIR . '/template/user/register.php');        
    }

    public static function authorization()
    {
        $pageTitle = 'Авторизация';
       
        if (isset($_POST['submit'])) {
            $_SESSION['username'] = isset($_SESSION['username']) ? $_SESSION['username'] : "";     
            $data = new User();
            if($data->getUser($_POST['username'], $_POST['password'])){
                $_SESSION['username'] = $_POST['login']; 
                $_SESSION['role'] = $data['role'];       
                $status['status'] = " <p class='alert alert-success'>Вы успешно авторизовались! </p>";
                require(DIR.'/template/user/message.php');
            }else 
            {
                $status['status'] = "<p class='alert alert-danger'>Не удалось авторизоваться!</p>";
                require(DIR.'/template/user/loginForm.php');
            }
        }
        require(DIR.'/template/user/loginForm.php');
    } 

    public static function logOut()
    {        
        unset($_SESSION["username"]);
        unset($data);
        unset($_GET['action']);
        unset($_POST['login']);
        unset($_POST['password']);
        $_SESSION = ['role' => 'user'];
        $pageTitle = "SendMes";
        require(DIR."/template/message.php");
    }
}
?>