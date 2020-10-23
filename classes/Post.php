<?php


class Post extends QueryBuilder
{

    public $newPostStatus = NULL;

    public function createPost()
    {
        $title = $_POST['post_title'];
        $description = $_POST['post_description'];
        $createdAt = date('Y-m-d');
        $user_id = $_SESSION['loggedUser']->id;

        $sql = "INSERT INTO posts VALUES (NULL,?,?,?,?)";
        $query = $this->db->prepare($sql);
        $query->execute([$title, $description, $user_id, $createdAt]);

        if ($query){
            $this->newPostStatus = true;
        }else {
            $this->newPostStatus = false;
        }
    }

    public function deletePost($id)
    {
        $sql = "DELETE FROM posts WHERE id = ?";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
    }

    public function countRecord()
    {
        $sql = "SELECT COUNT(*) FROM posts";
        $query = $this->db->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

    public function countUserPosts($id)
    {
        $sql = "SELECT COUNT(posts.id) FROM posts INNER JOIN users ON posts.user_id = users.id WHERE posts.user_id = '$id'";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
        $result = $query->fetchAll();
        return $result;
    }

}
