<?php

if (!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])){

    require_once "dbconnect.php";

    $req = $pdo->prepare('SELECT * FROM users WHERE username = :username OR email = :username');
    $req->execute(['username' => $_POST['username']]);
    $users = $req->fetch();

    if(password_verify($_POST['password'], $users['password'])){
        session_start();

        $_SESSION['users'] = $users;

        header('location: home.php');
        exit();
    }
}

require_once "header.php";

?>

<div class="container">
            <div class="col-md-8 order-md-1">

            <h2 class="mb-3">Login</h2>

            <form action="" method="POST" class="needs-validation">

                <div class="mb-3">
                    <label for="">Username or email</label>
                    <input type="text" name="username" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>

                <form>
            </div>
            </div>

<?php

require_once "footer.php";
