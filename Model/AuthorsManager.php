<?php

require_once('model/Manager.php');

class AuthorManager extends manager

{
    public function getAuthors()
    {
        $db = $this->dbconnect();
        $req = $db->query('SELECT * FROM author ');

        return $req;
    }

    public function GetMaxAuthorID(){
        $db = $this->dbconnect();
        $req=$db->query('SELECT AuthorID FROM author ORDER BY AuthorID DESC LIMIT 1');
        return $req;
    }


    public function getAuthor($Id)
    {
        $db = $this->dbconnect();
        $req = $db->query('SELECT *  FROM author WHERE AuthorID = '.$Id);

        $author = $req->fetch();

        return $author;
    }

    public function postAuthor($NameAuthor,$DiscAuthor)
    {
        $db =$this->dbconnect();
        $author = $db->prepare('INSERT INTO author( AuthorName , AuthorBio) VALUES(?, ?)');
        $affectedLines = $author->execute(array($NameAuthor,$DiscAuthor));

        return $affectedLines;

    }
    public function DeleteAuthor($id){
        $db =$this->dbconnect();
        var_dump($id);
        $req = $db->query('DELETE FROM `author` where `AuthorID`='.$id);


        return $req;
    }
}