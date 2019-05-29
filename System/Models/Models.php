<?php 
use System\core\DB;
class Models extends DB
{
    public static function inizializate()
    {
        return System\core\DB::mysqlConnect();
    }
}


?>