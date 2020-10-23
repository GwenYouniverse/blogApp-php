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
    <h4>Your posts</h4>
</div>


<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
           <?php foreach ($posts as $post): ?>
            <?php if (isset($_SESSION['loggedUser']) && $post->user_id == $_SESSION['loggedUser']->id): ?>

                <div class="card mb-3">
                    <div class="card-header"><h3><?php echo $post->title; ?><small class="float-right">
                                <?php if (isset($_SESSION['loggedUser']) && $post->user_id == $_SESSION['loggedUser']->id): ?>
                                    <a href="index.php?post_id=<?php echo $post->id; ?>" class="btn btn-sm btn-danger">Delete</a>
                                <?php endif; ?></small></h3>
                    </div>
                    <div class="card-body"><p><?php echo $post->description; ?></p></div>
                    <div class="card-footer">
                        <button class="btn btn-info btn-sm float-right">
                            <?php $date = date_create($post->created_at); echo date_format($date, "Y-m-d"); ?>
                        </button>
                        <button class="btn btn-warning btn-sm float-left">
                            <?php echo $user->getUserWithId($post->user_id)->name; ?>
                        </button>
                    </div>
                </div>
               <?php endif; ?>
            <?php endforeach; ?>


        </div>
    </div>
<?php if ($countUserPost[0][0] == 0): ?>
    <h3>No posts from users <?php echo $_SESSION['loggedUser']->name ?></h3>
    <?php endif; ?>
</div>

<?php require_once "partials/bottom.php"; ?>
