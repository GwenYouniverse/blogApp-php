<?php require_once "partials/top.php"; ?>
<nav class="navbar navbar-expand navbar-light bg-light">
    <a href="index.php" class="navbar-brand">Blogger</a>
    <ul class="navbar-nav ml-auto">
        <?php if (isset($_SESSION['loggedUser'])): ?>
            <li class="nav-item">
                <a href="user_profile.php" class="nav-link"><?php echo $_SESSION['loggedUser']->name ?></a>
            </li>
        <?php endif; ?>
        <li class="nav-item">
            <a href="index.php" class="nav-link">Back to blog</a>
        </li>
        <li class="nav-item">
            <a href="logout.php" class="nav-link">Logout</a>
        </li>
    </ul>
</nav>

<div class="jumbotron text-center">
    <h4>Add new post</h4>
</div>

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <?php if ($post->newPostStatus): ?>
                <?php header("Refresh:5; url=index.php"); ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Uspesno ste kreirali post!</strong> Bicete prebaceni na pocetnu stranu za 5 sekundi
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <form action="add_post.php" method="post">
                <input type="text" name="post_title" placeholder="title" class="form-control"> <br>
                <textarea name="post_description" class="form-control" placeholder="description" id="" cols="30" rows="10"></textarea><br>
                <button type="submit" name="post_sub_btn" class="form-control btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>

<?php require_once "partials/bottom.php"; ?>
