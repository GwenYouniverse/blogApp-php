<?php require_once "bootstrap.php";

if (!isset($_SESSION['loggedUser'])){
    header("Location: index.php");
}
$posts = $post->selectAll('posts');
$countUserPost = $post->countUserPosts($_SESSION['loggedUser']->id);

require_once "views/user_profile.view.php";

