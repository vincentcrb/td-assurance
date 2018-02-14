<?php

session_start();

if(!isset($_SESSION['users'])){
    header('Location: login.php');
    exit();
}

require_once "header.php";

?>
        <div class="jumbotron diapo">
                <div class="container mx-auto text-center">
                    <h1 class="display-4">Welcome <?= $_SESSION['users']['username'] ?></h1>
                    <p class="lead">Due to the short time to make this website you can only change your password for now.</p>
                    <p class="lead">Thanks for understanding.</p>
                </div>
        </div>

<?php

require_once "footer.php";