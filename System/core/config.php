<?php 

    ini_set('display_errors',1);
    error_reporting(E_ALL);
    
    include(DIR."/System/core/DB.php");
    include(DIR."/System/Models/Models.php");
    
    include(DIR."/System/Models/Message.php");
    include(DIR."/System/Models/User.php");

    include(DIR."/System/Controller/MessageController.php");
    include(DIR."/System/Controller/UserController.php");

    
?>