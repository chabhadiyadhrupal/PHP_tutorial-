<form method="post" action="">
    <input type="text" name="user" placeholder="enter your name">
    <br>
    <button name="button" value="setcookie">set cookie</button>
    <br>
    <button name="button" value="displaycookie">display cookie</button>
    <br>
    <button name="button" value="deletecookie">delete cookie</button>

</form>
<?php
if (isset($_POST['button'])) {
    if ($_POST['button'] == 'setcookie') {
        $vel = $_POST['user'];
        setcookie("user", $vel);
        echo "cookie set";
    }
    if($_POST['button']=="displaycookie")
    {
        echo  $_COOKIE['user'];
    }
    if($_POST['button']=="deletecookie")
    {
        if(isset($_COOKIE['user']))
        {
            setcookie("user",null,-1);
        }
    }
}

?>