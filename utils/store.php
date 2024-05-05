<?php
function Store($file,$type,$name,$tmp){
    if($tmp){
        $target_dir = "../../tmp_uploads/$type/";
    }else{
        $target_dir = "../../uploads/$type/";
    }
    $extension = pathinfo(basename($file['name']), PATHINFO_EXTENSION);
    $target_file = $target_dir . $name . '.' .$extension ;
    try {
        echo "</br>$target_file</br>";
        var_dump(move_uploaded_file($file['tmp_name'],$target_file));
        move_uploaded_file($file['tmp_name'],$target_file);
       
    } catch (Exception $e) {
        echo 'error' . $e->getMessage();
    }
}

?>