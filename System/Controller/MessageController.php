<?php 

//namespace MessageController;
class MessageController 
{
    public static function showMessages ()
    {        
        $data = new Message();
        $data = $data->getMessages();
        if ($data == false) $status['status'] = "Сообщений нет";        
        $pageTitle = 'SendMes';
        require(DIR."/template/message.php");
    }

    public static function addMessage()
    {        
        $data = new Message();
        $data->insertMessage($_POST['message'], $_POST['login']);         
        require(DIR."/template/message.php");
    }
}


?>