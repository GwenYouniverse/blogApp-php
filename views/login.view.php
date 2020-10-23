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
    <h4>Login</h4>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3 col-sm-12">
            <h4 class="mb-5">Login</h4>
            <form action="login.php" method="post">
                <input type="text" name="login_email" placeholder="email" class="form-control" required> <br>
                <input type="password" name="login_password" placeholder="password" class="form-control" required> <br><br>
                <button class="form-control btn btn-primary" name="loginBtn">Login</button>
            </form>
            <?php if ($user->loggedUser): ?>
                <?php header("Location: index.php"); ?>
            <?php elseif(isset($_POST['loginBtn'])): ?>
                <div class="alert alert-danger">Neuspesno logovanje</div>
            <?php endif; ?>
        </div>

    </div>
</div>
<?php require_once "partials/bottom.php"; ?>
