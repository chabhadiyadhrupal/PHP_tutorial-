<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>button</title>
</head>
<body>
    <form action="" method="post">
        <button name="button">OnClick</button>
    </form>

</body>
</html>
<?php
 if(isset($_POST['button']))
 {
    echo "function called";
 }

?>