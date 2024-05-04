<?php
session_start();
include('../../utils/mail.php');
include('../../utils/store.php');

$t = 4;
if(isset($_POST['register_btn'])){
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
    $email_template  = "
    <h2>Bonjour $nom $prenom</h2>
    <h5>s'il vous plait verifier ton email en cliquant sur le lien ce dessous</h5>
    </br>
    </br>
    <a href = 'http://localhost/Concours/pages/Register/confirmation.php?token=$token' >verifier</a>
";
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
    $_SESSION['real_token'] = $token;
    $_SESSION['homemsj'] = 'verfiy you email';
    
    header('Location: ../Home/home.php');
}