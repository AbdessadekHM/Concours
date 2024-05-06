<?php 
session_start();
$page_title = 'Dashboard'; 
?>
<?php include('../../includes/header.php') ?>
<?php include('../../includes/navbar.php') ?>
<div class="py-5">

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>User Info</h2>
            </div>
            <div class="card-body">

                <div class="">
                    <form class="row justify-content-around" action='edit.php' enctype="multipart/form-data"
                        method="POST">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 text-center pt-4">
                                    <!-- First column content (left side) -->
                                    <div class="form-group p-4">
                                        <img style='width:500px;border-radius:10px'
                                            src="../../uploads/photo/abdessadek50.png" alt="">
                                    </div>
                                </div>
                                <!-- Second column content (right side) -->

                                <div class="col-md-6">
                                    <div class="form-group pb-4">
                                        <label class='pb-3' for="nom">Nom</label>
                                        <input disabled value="abdessadek" type="text" class="form-control" id="nom"
                                            name='nom'>
                                    </div>
                                    <div class="form-group pb-4">
                                        <label class='pb-3' for="prenom">Prenom</label>
                                        <input disabled value="abdessadek" type="text" class="form-control" id="prenom"
                                            name='prenom'>
                                    </div>
                                    <div class="form-group pb-4">
                                        <label class='pb-3' for="email">Email</label>
                                        <input disabled value="abdessadek" type="email" class="form-control" id="email"
                                            name="email">
                                    </div>
                                    <div class="form-group pb-4">
                                        <label class='pb-3' for="naissance">Date de naissance:</label>
                                        <input disabled value="abdessadek" type="date" class="form-control"
                                            id="naissance" name="naissance">
                                    </div>

                                    <div class="form-group pb-4">
                                        <label class='pb-3' for="diplome">Diplome</label>
                                        <input disabled value="abdessadek" type="text" class="form-control" id="diplome"
                                            name="diplome">
                                    </div>
                                    <div class="form-group pb-4">
                                        <label class='pb-3' for="niveau">Niveau</label>
                                        <input disabled value="abdessadek" type="text" class="form-control" id="niveau"
                                            name="niveau">
                                    </div>
                                    <div class="form-group pb-4 d-flex justify-content-between">
                                        <label class='pb-3' for="cv">CV</label>
                                        <a href="../../uploads/cv/abdou.pdf" download>
                                            <button class='btn btn-primary'>Download</button>
                                        </a>
                                    </div>
                                    <div class="form-group pb-4">
                                        <label class='pb-3' for="etabli">Etablissement</label>
                                        <input disabled value="abdessadek" type="text" class="form-control" id="etabli"
                                            name='etabli'>
                                    </div>
                                    <div class="form-group pb-4">
                                        <label class='pb-3' for="log">Nom d'utilisateur</label>
                                        <input disabled value="abdessadek" type="text" class="form-control" id="log"
                                            name="log">
                                    </div>
                                    <div class="form-group pb-4">
                                        <label class='pb-3' for="mdp">Mot de passe</label>
                                        <input disabled value="abdessadek" type="password" class="form-control" id="mdp"
                                            name="mdp">
                                    </div>
                                    <div class="row form-group pt-5 pe-3 justify-content-end">
                                        <button name='edit' class=" col-md-2 btn btn-primary " type="submit">
                                            Edit
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                </div>
            </div>
            </form>

        </div>
    </div>
</div>

</div>






<?php include('../../includes/footer.php') ?>