<?php

require_once "../core/DbManager.php";

class Login{

    public function user_registration($user_name,$user_pass,$user_email){

        $Login = new DbManager();
        $dbh = $Login->connectMySQL();
        print_r($dbh);
        $stmt = $dbh->prepare("select * from user;");
        $stmt->execute();
        $result = $stmt->fetchAll();

        $dbh = null;

        return $result;
    }

}
