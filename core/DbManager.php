<?php

class DbManager{

    public function connectMySQL(){

        $dsn = 'mysql:dbname=PushCalling';
        $user = 'demouser';
        $password = 'demopass';

        try{
            $dbh = new PDO($dsn,$user,$password);

            print("connect Succeeded");

        }catch(PDOException $e){
            print('Error:'.$e->getMessage());
            die();
        }

        return $dbh;

    }
}


$a = new DbManager();
$a->connectMySQL('demouser', 'demopass');
