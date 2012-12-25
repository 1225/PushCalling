<?php
require_once "../model/Login.php";

$a = new Login();
$b = $a->userRegistration("user2","user2","saruhei1989@moegi.waseda.jp");

/*if(mb_send_mail("saruhei1989@hotmail.com","TESTMAIL","This is a testmassage","From@saruhei1989@hotmail.com")){
    print("メールは送信されました");
}else{
    print("送信失敗");
}*/
