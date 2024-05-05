<?php
include_once('../../utils/db.php');
include('../../utils/move_file.php');
include('../../utils/db_instance.php');
include_once('./code.php');
function Add_to_DB($table,$condition,$column,$data,$db){
    $result =  $db->Read($table,$condition);
    if(!count($result)){
        $db->Create($table,$column,$data);
        
        $_SESSION['message'] = 'Added successfully';
        $_SESSION['status'] = 1;
        //header("Location: register.php");
    }else{
        $_SESSION['message'] = 'this username already used';
        $_SESSION['status'] = 0;
    }
}

echo "hello";
if(isset($_SESSION['token']) && $_SESSION['token']==$_SESSION['real_token']){
    extract($_SESSION['userInfo']);
    echo $niveau;
    $condition = "log='$log'";
    $cv_ext = pathinfo(basename($cv['name']), PATHINFO_EXTENSION);
    $photo_ext = pathinfo(basename($photo['name']), PATHINFO_EXTENSION);
        $data = [
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':diplome' => $diplome,
            ':naissance' => $naissance,
            ':etablissement' => $etabli,
            ':niveau' => $niveau,
            ':cv' => "C:\\xampp\htdocs\Concours\uploads\cv\\$log.$cv_ext",
            ':photo' => "C:\\xampp\htdocs\Concours\uploads\photo\\$log.$photo_ext",
            ':log' => $log,
            ':mdp' => $mdp,
            ] ;
            $column = array_keys($data);
            $column = array_map(function($value) {
                return substr($value, 1); // Remove the first character (colon)
            }, $column);
            $file_name = $log ;
    if($niveau == 3){
        $table = 'etud3a';
        Add_to_DB($table,$condition,$column,$data,$db);
        move($file_name,$cv,'cv');
        move($file_name,$photo,'photo');
        header('Location: ../LogIn/logIn.php');
        
    }else{
        $table = 'etud4a';
        Add_to_DB($table,$condition,$column,$data,$db);
        move($file_name,$cv,'cv');
        move($file_name,$photo,'photo');
        header('Location: ../LogIn/logIn.php');
        
}
}