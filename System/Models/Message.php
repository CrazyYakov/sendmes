<?php 

use  System\core\DB;

class Message extends Models
{
    public function insertMessage($message,$user_id)
    {                
        $this->message = $message;   
        $sql_QueryInsert = "INSERT INTO messages (user_id, message, publicationDate) VALUES($this->user_id, $this->message, CURRENT_TIMESTAMP())";
        return !managmentMessages($sql_QueryInsert);
    }

    public function deleteMessageID($id_message)
    {       
            $sql_dropmessage = "DELETE FROM messages where id = $id_message";
            return managmentMessages($sql_dropmessage);
    }

    public  function getMessages()
    {
        $sql_InnerJoin = "SELECT login, publicationDate, message FROM users, messages WHERE users.ID = messages.user_id ORDER BY publicationDate DESC";

        $result = mysqli_query(Models::inizializate(), $sql_InnerJoin);

        return mysqli_fetch_all($result);
    }

    private function managmentMessages($sql_query)
    {
        $query = mysqli_query(Models::inizializate(), $sql_Query);                         
        if(!$query) die(mysqli_error());
        $result = mysqli_fetch_array($query);
        if (empty($result['ID'])) return true;
        
        return false;
    }
}
?>