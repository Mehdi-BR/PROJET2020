
<?php

require_once('model/Manager.php');

class BookManager extends manager

{
    public function getBooks()
    {
        $db = $this->dbconnect();
        $req = $db->query('SELECT * FROM `books` ORDER BY `books`.`BookTitle` ASC');

        return $req;
    }

    public function booksbygen($gen)
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT COUNT(*) FROM books WHERE genreID='.$gen);

        return $req;
    }
    
    public function getBooksByID()
    {
        $db = $this->dbconnect();
        $req = $db->query('SELECT * FROM `books` ORDER BY `books`.`BookID` DESC limit 8');

        return $req;
    }
    public function getGenres()
    {
        $db = $this->dbconnect();
        $req = $db->query('SELECT * FROM genre ');

        return $req;
    }
    public function getGenre($Id)
    {
        $db = $this->dbconnect();
        $req = $db->query('SELECT *  FROM genre WHERE genreID = '.$Id);

        $genre = $req->fetch();

        return $genre;
    }
    public function SearchGenre($var,$g)
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM books WHERE BookTitle LIKE \'%'.$var.'%\' AND genreID='.$g);

        return $req;
    }

    public function getBook($ID){
        $db = $this->dbconnect();

        $req = $db->query('SELECT * FROM books JOIN (genre,author) ON (books.genreID=genre.genreID AND books.AuthorID=author.AuthorID) WHERE BookID='.$ID);


        $book = $req->fetch();

        return $book;


    }
    public function SearchBooks($var)
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM books WHERE BookTitle LIKE \'%'.$var.'%\'');

        return $req;
    }
    public function getFavotits($uid){

        $db = $this->dbconnect();

        $req = $db->query('SELECT * FROM favorites join (books) on (books.bookID=favorites.bookID) where UserID= '.$uid);

        return $req;



    }
    public function getFavotit($id,$uid){

        $db = $this->dbconnect();

        $req = $db->query('SELECT bookID FROM favorites where bookID='.$id.' AND UserID='.$uid);

        return $req;



    }

    public function addFav($id,$uid){
        $db = $this->dbconnect();
        $req = $db->query('INSERT INTO `favorites`(`bookID`, `UserID`) VALUES ('.$id.','.$uid.')');

        return $req;
    }

    public function delFav($id,$uid){
        $db = $this->dbconnect();
        $req = $db->query('DELETE FROM `favorites` WHERE `bookID`='.$id.' AND `UserID`='.$uid);

        return $req;
    }


    public function GetMaxBookID(){
        $db = $this->dbconnect();
        $req=$db->query('SELECT BookID FROM books ORDER BY BookID DESC LIMIT 1');
        return $req;
    }





    public function postBook($bookTitle,$bookDisc,$AuthorID,$genreID)
    {
        $db =$this->dbconnect();

        $book = $db->prepare('INSERT INTO books( BookTitle , BookDescription, AuthorID,genreID) VALUES(?, ?, ?,?)');
        $affectedLines = $book->execute(array($bookTitle,$bookDisc,$AuthorID,$genreID));
        var_dump($affectedLines);

        return $affectedLines;

    }

    public function DeleteBook($id){
        $db =$this->dbconnect();
        var_dump($id);
        $req = $db->query('DELETE FROM `books` where `BookID`='.$id);


        return $req;
    }


}