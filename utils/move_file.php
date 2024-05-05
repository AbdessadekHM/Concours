<?php

function move($file_name,$original_name,$type){
    // Source and destination folder paths
    $sourceFolder = "../../tmp_uploads/$type/";
    $destinationFolder = "../../uploads/$type/";
    $extension = pathinfo(basename($original_name['name']), PATHINFO_EXTENSION);
    $file_name = $file_name . '.' . $extension  ;
    echo $file_name;
    // Check if the file exists in the source folder
    $sourceFilePath = $sourceFolder . $file_name;
    if (file_exists($sourceFilePath)) {
        // Move the file to the destination folder
        $destinationFilePath = $destinationFolder . $file_name;
        if (rename($sourceFilePath, $destinationFilePath)) {
            echo "File '$file_name' moved successfully to the destination folder.";
            
            // Remove the file from the source folder
            // if (unlink($sourceFilePath)) {
            //     echo "File '$file_name' removed from the source folder.";
            // } else {
            //     echo "Failed to remove file '$file_name' from the source folder.";
            // }
        } else {
            echo "Failed to move file '$file_name' to the destination folder.";
        }
    } else {
        echo "File '$file_name' does not exist in the source folder.";
    }

}