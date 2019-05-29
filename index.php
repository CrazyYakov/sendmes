<?php         
    define('DIR', dirname(__FILE__));
    session_start();
    
    include(DIR."/System/core/config.php");
  
    $action = isset($_GET['action']) ? $_GET['action'] : "";
    switch ($action) {
        case 'logout':
            UserController::logOut();
            break;
        case 'addmessage':
            MessageController::addMessage();
            break;
        case 'autohorization':
            UserController::authorization();
            break;
        case 'registrion':
            UserController::registrtion();
            break;
        default:
            MessageController::showMessages();
            break;
    }
?>