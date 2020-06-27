<?php

require_once("model/Manager.php");

class UserManager extends manager
{
    public function loginconf()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM user');

        return $req;
    }

    public function signupconf($nom,$prenom,$email,$mdp,$date,$quartier,$genre)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("INSERT INTO user (nom, prenom, email, mot_de_passe, date_de_naissance, quartier, genre) VALUES (?, ?, ?, ?, ?, ?, ?)");

        $req->execute(array($nom,$prenom,$email,$mdp,$date,$quartier,$genre));

    }

    public function GetUser($id){

        $db = $this->dbConnect();
        $user = $db->query('SELECT * FROM user WHERE id='.$id);

        return $user;


    }
    public function update($varname,$var,$id)
    {
        $db = $this->dbConnect();
        $req = $db->query('UPDATE user SET '.$varname.'=\''.$var.'\' WHERE id='.$id);


    }

}
