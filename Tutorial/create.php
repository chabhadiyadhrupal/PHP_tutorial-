<form action="" method="post">
    <input type="text" name="name" placeholder="enter file name">
    <br>
    <br>
    <textarea name="description" placeholder="content"></textarea>
    <br>
    <br>
    <button>create file</button>
</form>
<?php
if(isset($_POST['name']))
{
    $_filename="files/".$_POST['name'];
    $_content=$_POST['description'];
    $_file= fopen($_filename,"w")or die("unable create file");
    fwrite($_file,$_content);
    fclose($_file);
    echo "file created";
}
