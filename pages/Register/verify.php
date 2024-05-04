<?php

include('../../utils/db.php');
include_once('code.php');
function existing_check($table,$condition,$column,$data,$db){
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
if(isset($_SESSION['token']) && $_SESSION['token']==$_SESSION['real_token']){
    extract($_SESSION['userInfo']);
    $info_DB = [
        'servername' => 'localhost:3000',
        'username' => 'root',
        'password' => '',
        'DB_name' => 'concours'
    ];
    $db = new DB($info_DB);
    echo $niveau;
    $condition = "log='$log'";
    $file_name = $log . "_" .$niveau;
        $data = [
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':diplome' => $diplome,
            ':naissance' => $naissance,
            ':etablissement' => $etabli,
            ':niveau' => $niveau,
            ':cv' => "C:\xampp\htdocs\Concours\uploads\cv\\$log",
            ':photo' => "C:\xampp\htdocs\Concours\uploads\photo\\$log",
            ':log' => $log,
            ':mdp' => $mdp,
            ] ;
            $column = array_keys($data);
            $column = array_map(function($value) {
                return substr($value, 1); // Remove the first character (colon)
            }, $column);
            print_r($cv);
            echo $file_name;
            echo $cv['tmp_name'];
    if($niveau == 2){
        $table = 'etud3a';
        existing_check($table,$condition,$column,$data,$db);
        $file_name = $log;
    Store($cv,'cv',$file_name);
    Store($photo,'photo',$file_name);
        echo 324;
    }else{
        $table = 'etud4a';
        existing_check($table,$condition,$column,$data,$db);
        $file_name = $log;
        Store($cv,'cv',$file_name);
    Store($photo,'photo',$file_name);
    }
}