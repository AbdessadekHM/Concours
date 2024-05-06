<?php 
session_start();
$page_title = 'Log In'; 
?>
<?php include('../../includes/header.php') ?>
<?php include('../../includes/navbar.php') ?>
<div class="py-5">

    <div class="container">
        <div class="row justify-content-center">
            <?php if(isset($_SESSION['message'])): ?>
            <h4 class="alert alert-<?php if($_SESSION['status']){echo 'success';}else{echo 'danger';} ?>">
                <?= $_SESSION['message'] ?></h4>
            <?php endif?>
            <?php unset($_SESSION['message']) ?>
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header text-center">
                        Log In
                    </div>
                    <div class="card-body">
                        <form class="row justify-content-around">

                            <div class="form-group pb-4">
                                <label class='pb-3' for="log">Nom d'utilisateur</label>
                                <input type="text" class="form-control" id="log" name="log">
                            </div>
                            <div class="form-group pb-4">
                                <label class='pb-3' for="mdp">Mot de passe</label>
                                <input type="password" class="form-control" id="mdp" name="mdp">
                            </div>
                            <div>
                                <div class="form-group col-md-6">
                                    <select required class="form-select" name='filter'
                                        aria-label="Default select example">
                                        <option selected value="0" disabled>Choose the year</option>
                                        <option value="1">etudiants 3eme annee</option>
                                        <option value="2">etudiants 4eme annee</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group pt-5 pe-3 justify-content-end">
                                <button class=" col-md-2 btn btn-primary " type="submit">
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






<?php include('../../includes/footer.php') ?>