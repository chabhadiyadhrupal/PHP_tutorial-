<?php
//print_r($_FILES);
if($_FILES['fileUpload'])
{
    $path=$_FILES['fileUpload']['name'];
    $upload_path="./upload/".$path;
    if(move_uploaded_file($_FILES['fileUpload']['tmp_name'],$upload_path))
    {
        echo "File Uploaded";
    }
    else{
    die("fail to upload");
    }
}
else{
    die("no file found");
} 
?>