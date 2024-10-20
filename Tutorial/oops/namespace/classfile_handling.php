<?php
 if(isset($_POST['user']))
 {
    class user{
        function entername($user)
        {
            echo "your name is" .$user;

        }

    }
    $call=new user;
    $call->entername($_POST['user']);
 }
 else {
echo '<form action="" method="post">
    <input type="text" name="user" placeholder="enter your name">
    <br>
    <button>click</button>

 </form>';
 }

 ?>
 