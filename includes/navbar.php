<?php  ?>
<nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary ps-5 pe-5" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Ensa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link <?php if($page_title == 'Home') echo 'active'?>  " aria-current="page"
                    href="../Home/home.php">Home</a>
                <a class="nav-link <?php if($page_title == 'Register') echo 'active'?>  "
                    href="../Register/register.php">Register</a>
                <a class="nav-link <?php if($page_title == 'Log In') echo 'active'?>  " href="../LogIn/logIn.php">Log
                    In</a>
                <a class="nav-link disabled d-none" aria-disabled="true">Dashboard</a>
            </div>
        </div>
    </div>
</nav>