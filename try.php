<?php
require 'varpage.php';

$PSEUDO = $_POST["pseudo"];
$TITLE = $_POST["title"];
$LOC = $_POST["location"];

$sql = "INSERT INTO pics (PSEUDO, TITLE, LOC, `created at`) VALUES ('$PSEUDO', '$TITLE', '$LOC', CURRENT_TIMESTAMP)";
$result = mysqli_query($conn,$sql);

if (isset($_FILES["userfile"])){
    if (!is_dir('pictures')){
        mkdir('pictures');
    }
    $ext_error = false;
    $extension = array('jpg','jpeg','png');
    $file_ext = explode('.',$_FILES['userfile']['name']);
    $file_ext = end($file_ext);
    if (!in_array($file_ext,$extension)){
        $ext_error = true;
    }

    $new_file_name = $PSEUDO . ' ' . $LOC . ' ' . date('Y-m-d') . '.' . $file_ext;
    move_uploaded_file($_FILES["userfile"]["tmp_name"],'pictures/'.
    $new_file_name);  

    $new_file_path = 'pictures/' . $new_file_name;
    rename($new_file_path, 'pictures/' . basename($new_file_path));  
}

function pre_r($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
?>


