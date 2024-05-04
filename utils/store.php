<?php
function Store($file,$type,$name){
    $target_dir = "../../uploads/$type/";
    $extension = pathinfo(basename($file['name']), PATHINFO_EXTENSION);
    $target_file = $target_dir . $name . '.' .$extension ;
    $uploadOk = 1;
    try {
        move_uploaded_file($file['tmp_name'],$target_file);
    } catch (Exception $e) {
        echo 'error' . $e->getMessage();
    }
}

?>