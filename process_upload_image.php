<?php
$data = $_FILES['file'];
$tmp_name = $_FILES['file']['tmp_name'];
$error = $_FILES['file']['error'];
$name = $_FILES['file']['name'];
if($error > 0 ){
    echo 'error';
}
else {
    if(move_uploaded_file($tmp_name, 'uploads/'.$name)){
        echo 'uploads/'.$name;
    }else{
        echo 'false';
    }
}