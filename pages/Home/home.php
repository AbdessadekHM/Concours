<?php 
session_start();
$page_title = 'Home';
?>
<?php include('../../includes/header.php') ?>
<?php include('../../includes/navbar.php') ?>
<div class="py-5">

    <div class="py-5">
        <div class="container text-center">
            <?php if(isset($_SESSION['homemsj'])) :?>
            <h4 class='alert alert-success'> <?= $_SESSION['homemsj']; ?> </h4>
            <?php endif ?>
            <?php unset($_SESSION['homemsj']) ?>
            <h4>Home Page</h4>
            <h3>
                Ensa Concours Site Web
            </h3>
        </div>
    </div>
    <?php include('../../includes/footer.php'); ?>