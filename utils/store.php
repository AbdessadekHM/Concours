<?php
function Store($file,$type,$name){
    $target_dir = "../../uploads/$type/";
    $extension = pathinfo(basename($file['name']), PATHINFO_EXTENSION);
    $target_file = $target_dir . $name . '.' .$extension ;
    try {
        echo "</br>$target_file</br>";
        move_uploaded_file($file['tmp_name'],$target_file);
        echo 'fine';
    } catch (Exception $e) {
        echo 'error' . $e->getMessage();
    }
}

?>