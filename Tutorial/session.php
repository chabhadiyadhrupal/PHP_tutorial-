<form action="" method="post">
    <input type="text" name="user"  placeholder="enter your name">
    <br>
    <br>
    <button name="button" value="set">set session</button>
    <br>
    <br>
    <button name="button" value="get">get sessoin</button>
    <br>
    <br>
    <button name="button" value="delete">delete session</button>

</form>
<?php
session_start();
if(isset($_POST['button']))

{   
    if($_POST['button']=="set")
    {
        $val=$_POST['user'];
        $_SESSION['user']=$val;

    }
    if($_POST['button']=="get")
    {
        echo $_SESSION['user'];
    }
    if($_POST['button']=="delete")
    {
        session_destroy();
    }

}

?>