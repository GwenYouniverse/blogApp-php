<?php require_once "partials/top.php"; ?>
<nav class="navbar navbar-expand navbar-light bg-light">
    <a href="index.php" class="navbar-brand">Blogger</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="index.php" class="nav-link">Back to Blog</a>
        </li>
    </ul>
</nav>

<div class="jumbotron text-center">
    <h4>Regster</h4>
</div>

<div class="container">
    <div class="row">

        <div class="col-md-6 offset-3 col-sm-12">
            <h4>Register</h4>
            <form action="register.php" method="post">
                <input type="text" name="register_name" placeholder="name" class="form-control" required> <br>
                <input type="email" name="register_email" placeholder="email" class="form-control" required> <br>
                <input type="password" name="register_password" placeholder="password" class="form-control" required> <br>
                <button class="form-control btn btn-warning" name="registerBtn">Register</button>
            </form>
            <?php if ($user->register_result): ?>
            <?php header("Location: login.php"); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require_once "partials/bottom.php"; ?>
