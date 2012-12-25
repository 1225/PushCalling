<?php

require_once "../core/DbManager.php";

class Login{

    public function userRegistration($user_name,$user_pass,$user_email){

        $Login = new DbManager();
        $dbh = $Login->connectMySQL();
        if($this->checkUserNameRepetition($user_name)){
            //エラーページをリロード
        }else{
            if(isset($user_name) && isset($user_pass) && isset($user_email)){
                /*
                $stmt = $dbh->prepare("insert into user (user_name,password,email) value (:user_name, :password, :email);");
                $stmt->bindValue(':user_name',$user_name,PDO::PARAM_STR);
                $stmt->bindValue(':password',$user_pass,PDO::PARAM_STR);
                $stmt->bindValue(':email',$user_email,PDO::PARAM_STR);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $dbh = null;
                 */
                return true;
            }
        }

        $dbh = null;

        return false;

    }


    public function checkUserNameRepetition($user_name){

        $Login = new DbManager();
        $dbh = $Login->connectMySQL();
        $stmt = $dbh->prepare("select user_name from user where user_name = :user_name;");
        $stmt->bindValue(':user_name',$user_name,PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $dbh = null;

        if(isset($result['user_name'])){
            return true;
        }else{
            return false;
        }
    }

}
