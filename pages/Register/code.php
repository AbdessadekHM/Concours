<?php
session_start();
include('../../utils/mail.php');
include('../../utils/store.php');
function stores_data($photo,$cv,$file_name){
    Store($cv,'cv',$file_name,true);
    Store($photo,'photo',$file_name,true);
}
if(isset($_POST['register_btn']) ){
    //get inputs values
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $diplome = $_POST['diplome'];
    $naissance = $_POST['naissance'];
    $etabli = $_POST['etabli'];
    $niveau = $_POST['niveau'];
    $cv = $_FILES['cv'];
    $photo = $_FILES['photo'];
    $log = $_POST['log'];
    $mdp = $_POST['mdp'];
    $token = md5(rand());
    //set users info as session variable

    $user_info = [
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'diplome' => $diplome,
        'naissance' => $naissance,
        'etabli' => $etabli,
        'niveau' => $niveau,
        'cv' => $cv,
        'photo' => $photo,
        'log' => $log,
        'mdp' => $mdp,
        'token' => $token
    ];

    $_SESSION['userInfo'] = $user_info;

    //declare email template

    $email_template  = "
    <h2>Bonjour $nom $prenom</h2>
    <h5>s'il vous plait verifier ton email en cliquant sur le lien ce dessous</h5>
    </br>
    </br>
    <a href = 'http://localhost/Concours/pages/Register/confirmation.php?token=$token' >verifier</a>
";

    //email infos and declare mailer instance

    $info = [
        'email' => $email,
        'sender' => 'abdessadek',
        'to_name' => $nom,
        'reply_name' => 'abdessadek'
    ];

    $mail = new MAILER();
    $mail->Recipients($info);
    $mail->Content('verify',$email_template,'by');
    $mail->Send();

    //set token in session and msj of verfication
    
    $_SESSION['real_token'] = $token;
    $_SESSION['homemsj'] = 'verfiy you email';

    //store files in tmp_uploads
    
    stores_data($photo,$cv,$log);
    
    //redirect
    header('Location: ../Home/home.php');
}