<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inscription.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <h1 class='title'>inscription</h1>
    <form action="" method="post" class='inscription_form'>
        <div class='input_container'>
            <label for="nom">Nom</label>
            <input id='nom' class='input' type="text" placeholder="Nom">
        </div>
        <div class='input_container'>
            <label for="prenom">Prenom</label>
            <input id='prenom' class='input' type="text" placeholder="Prenom">
        </div>
        <div class='input_container'>
            <label for="email">email</label>
            <input id='email' class='input' type="email" placeholder="Email">
        </div>
        <div class='input_container'>
            <label for="date">date de naissance</label>
            <input id='date' class='input' type="date">
        </div>
        <div class='input_container'>
            <label for="dip">Diplome</label>
            <input id='dip' class='input' type="text" placeholder="Diplome">
        </div>
        <div class='input_container'>
            <label for="niv">Niveau</label>
            <select id='niv' name="" id="">
                <option value="">BAC+2</option>
                <option value="">BAC+3</option>
            </select>
        </div>
        <div class='input_container'>
            <label for="etab">Etablissement</label>
            <input id='etab' class='input' type="text" placeholder="Etablissement">
        </div>
        <div class='input_container'>
            <label for="photo">Photo</label>
            <input id='photo' class='input_file' type="file">
        </div>
        <div class='input_container'>
            <label for="cv">CV</label>
            <input id='cv' class='input_file' type="file">
        </div>
        <div class='input_container'>
            <label for="username">Nom d'Utilisateur</label>
            <input id='username' class='input' type="text" placeholder="Nom d'utilisateur">
        </div>
        <div class='input_container'>
            <label for="password">Mot de passe</label>
            <input id='password' class='input' type="password" placeholder="Mot de passe">
        </div>

        <div class='btn_container'>
            <input type="submit" value="submit" class='submit_btn'>
        </div>
    </form>
</body>

</html>