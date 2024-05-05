<?php 
$page_title = 'Register';
?>
<?php include('../../includes/header.php') ?>
<?php include('../../includes/navbar.php') ?>
<div class="py-5">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header text-center">
                        Register
                    </div>
                    <div class="card-body">
                        <form class="row justify-content-around" action='code.php' enctype="multipart/form-data"
                            method="POST">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- First column content (left side) -->
                                        <div class="form-group pb-4">
                                            <label class='pb-3' for="nom">Nom</label>
                                            <input required type="text" class="form-control" id="nom" name='nom'>
                                        </div>
                                        <div class="form-group pb-4">
                                            <label class='pb-3' for="prenom">Prenom</label>
                                            <input required type="text" class="form-control" id="prenom" name='prenom'>
                                        </div>
                                        <div class="form-group pb-4">
                                            <label class='pb-3' for="email">Email</label>
                                            <input required type="email" class="form-control" id="email" name="email">
                                        </div>
                                        <div class="form-group pb-4">
                                            <label class='pb-3' for="naissance">Date de naissance:</label>
                                            <input required type="date" class="form-control" id="naissance"
                                                name="naissance">
                                        </div>

                                        <div class="form-group pb-4">
                                            <label class='pb-3' for="diplome">Diplome</label>
                                            <select required class="form-select" name='diplome'
                                                aria-label="Default select example">
                                                <option selected value="" disabled>Choisis un niveau</option>
                                                <option value="2">BAC+2</option>
                                                <option value="3">BAC+3</option>
                                            </select>
                                        </div>
                                        <div class="form-group pb-4">
                                            <label class='pb-3' for="niveau">Niveau</label>
                                            <select required class="form-select" name='niveau'
                                                aria-label="Default select example">
                                                <option selected value="" disabled>Choisis un niveau</option>
                                                <option value="3">annee 3</option>
                                                <option value="4">annee 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Second column content (right side) -->
                                        <div class="form-group pb-4">
                                            <label class='pb-3' for="photo">Photo</label>
                                            <input required type="file" class="form-control" id="photo" name='photo'>
                                        </div>
                                        <div class="form-group pb-4">
                                            <label class='pb-3' for="cv">CV</label>
                                            <input required type="file" class="form-control" id="cv" name='cv'>
                                        </div>
                                        <div class="form-group pb-4">
                                            <label class='pb-3' for="etabli">Etablissement</label>
                                            <input required type="text" class="form-control" id="etabli" name='etabli'>
                                        </div>
                                        <div class="form-group pb-4">
                                            <label class='pb-3' for="log">Nom d'utilisateur</label>
                                            <input required type="text" class="form-control" id="log" name="log">
                                        </div>
                                        <div class="form-group pb-4">
                                            <label class='pb-3' for="mdp">Mot de passe</label>
                                            <input required type="password" class="form-control" id="mdp" name="mdp">
                                        </div>
                                        <div class="row form-group pt-5 pe-3 justify-content-end">
                                            <button name='register_btn' class=" col-md-2 btn btn-primary "
                                                type="submit">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>






<?php include('../../includes/footer.php') ?>