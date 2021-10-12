<?php

declare(strict_types=1);

class Post
{
    private $conexao;

    public function __construct()
    {
        try {
            $this->conexao = new PDO('mysql:host=localhost;dbname=public_information', 'root', '****');
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function list() : array
    {
        $sql = 'select * from post';

        $posts = [];

        foreach ($this->conexao->query($sql) as $key => $value) {
            array_push($posts, $value);
        }

        return $posts;
    }

    public function insert(string $title, string $description, string $data, int $like, int $idUser, int $idCategory) : int
    {
        $sql = 'INSERT INTO post (title, description, date, likes, user_idUser, category_idcategory) VALUES (?,?,?,?,?,?)';
        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $title);
        $prepare->bindParam(2, $description);
        $prepare->bindParam(3, $data);
        $prepare->bindParam(4, $like);
        $prepare->bindParam(5, $idUser);
        $prepare->bindParam(5, $idCategory);

        $prepare->execute();

        return $prepare->rowCount();
    }

    public function update(string $title, string $description, string $data, int $idCategory, int $idPost) : int
    {
        $sql = 'UPDATE post SET title = ?, description = ?, data = ?, category_Idcategory = ?, WHERE idPost = ?';
        $prepare = $this->conexao->prepare($sql);
        
        $prepare->bindParam(1, $title);
        $prepare->bindParam(2, $description);
        $prepare->bindParam(3, $data);
        $prepare->bindParam(4, $idCategory);
        $prepare->bindParam(5, $idPost);

        $prepare->execute();
        
        return $prepare->rowCount();
    }

    public function delete(int $idPost) : int
    {
        $sql = 'delete from post where idpost = ?';

        $prepare = $this->conexao->prepare($sql);
        
        $prepare->bindParam(1, $idPost);
        $prepare->execute();
        
       return $prepare->rowCount();
    }
}
