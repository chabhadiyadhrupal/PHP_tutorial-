<?php
class userAuthentication{
    function login($username)
    {
        echo "$username login sucessfully";

    }

}
class student extends userAuthentication{

}
class teacher extends userAuthentication{

}
$call=new student();
$call->login("dhrupal");
?>