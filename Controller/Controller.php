<?php

session_start();



require('model/BookManager.php');
require('model/AuthorsManager.php');
require('model/EventsManager.php');
require('Model/UsersManager.php');

function HomePage(){
    $BookManager = new BookManager();

    $books = $BookManager->getBooks();
    require ('view/HomeView.php');
}

function checkAdmin(){
    if(isset($_SESSION['id']) and $_SESSION['id']!=NULL){
        $user= getData();
    }
        if($user['admin']==1){
            $admin="";
        }else{
            $admin="style='visibility:hidden;'";
        }
        return $admin;
}


function getData(){
    $UserManager = new UserManager();
    $User = $UserManager->GetUser($_SESSION['id']);
    $user=$User->fetch();
    return $user;
}



function login($email, $mdp)
{
    $UserManager = new UserManager();
    $info = $UserManager->loginconf();

    while ($row = $info->fetch()){
        if (($row["email"] == $email) && ($row["mot_de_passe"] == $mdp)) {
            $_SESSION['id'] = $row['id'];

            $User = $UserManager->GetUser($_SESSION['id']);
            $user=$User->fetch();

            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];


            header('location: index.php');
        }
    }


}
function logout(){
    
            $_SESSION = array();
            session_destroy();
            header('location: index.php');
    
}

function signup()
{

    $UserManager = new UserManager();
    $UserManager->signupconf($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mdp'], $_POST['date'], $_POST['quartier'], $_POST['genre']);
    $info = $UserManager->loginconf();

    while ($row = $info->fetch()) {
        if (($row["email"] ==  $_POST['email']) && ($row["mot_de_passe"] ==  $_POST['mdp'])) {
            $_SESSION['id'] = $row['id'];
            $User = $UserManager->GetUser($_SESSION['id']);
            $user=$User->fetch();
            require('view/HomeView.php');
        }
    }
}


function ProfileInfo(){
    $UserManager = new UserManager();
    $User = $UserManager->GetUser($_SESSION['id']);
    $user=$User->fetch();
    require('view/ProfileEditView.php');
}

function UpdateProfile(){
    $userManager = new UserManager();
    $User = $userManager->GetUser($_SESSION['id']);
    $user=$User->fetch();

    $id=$_SESSION['id'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $mdp=$_POST['mdp'];
    $nmdp=$_POST['nmdp'];
    $cnmdp=$_POST['cnmdp'];
    $date=$_POST['date'];
    $quartier=$_POST['quartier'];
    $image=$_FILES['image']['size'];

    if ($mdp && $mdp==$user['mot_de_passe']) {
        if ($nom) {
            $info=$userManager->update('nom',$nom,$id);

        }
        if ($prenom) {
            $info=$userManager->update('prenom',$prenom,$id);
        }
        if ($nmdp && $cnmdp && $nmdp==$cnmdp) {
            $info=$userManager->update('mot_de_passe',$nmdp,$id);
        }
        if ($date) {
            $info=$userManager->update('date_de_naissance',$date,$id);
        }
        if ($quartier) {
            $info=$userManager->update('quartier',$quartier,$id);
        }
        if($image>0){
        ReplaceImage('img/userProfile/user',$_SESSION['id']);
        $userManager->upload($_SESSION['id'],'img/userProfile/user');
    }

    header('location: index.php?action=ProfileInfo');

}
    header('location: index.php?action=ProfileInfo');
}
function ReplaceImage($filePath,$id){
    $ext= ImageExists($filePath.$id);
    if($ext){


        unlink($filePath.$_SESSION['id'].$ext);
    }
}


function listBooks()
{
    $BookManager = new BookManager();

    $books = $BookManager->getBooks();

    require('view/BooksListView.php');
}

function listFavorites()
{
    $BookManager = new BookManager();

    $fav = $BookManager->getFavotits($_SESSION['id']);

    require('view/FavoritesView.php');
}

function checkFavorite($id, $uid)
{
    $BookManager = new BookManager();

    $fav = $BookManager->getFavotit($id, $uid);

    $fid = $fav->fetch();

    if ($fid[0] == $id) {
        $Fav = array('<svg class="bi bi-star-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg> Suprimer de Favoris', 'DelFav');
    } else {
        $Fav = array('<svg class="bi bi-star" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg> Ajouter au Favoris', 'AddFav');
    }


    return $Fav;
}

function AddFavourite($id, $uid)
{
    $BookManager = new BookManager();

    $fav = $BookManager->addFav($id, $uid);
    header('Location: index.php?action=BookPage&id=' . $id);
}

function DelFavourite($id, $uid)
{
    $BookManager = new BookManager();

    $fav = $BookManager->delFav($id, $uid);
    header('Location: index.php?action=BookPage&id=' . $id);
}

function listAuthors()
{
    $AuthorManager = new AuthorManager();

    $authors = $AuthorManager->getAuthors();

    require('view/AuthorListView.php');
}

function listEvents()
{

    $EventManager = new EventManager();
    $Events = $EventManager->getEvents();
    $top = $EventManager->getTopEvent();

    require('view/EventListView.php');

}

function search()
{
    $BookManager = new BookManager();
    $books = $BookManager->getBooks();
    $genre = $BookManager->getGenres();

    require('view/SearchView.php');
}

function SearchBook($var)
{
    $BookManager = new BookManager();
    $books = $BookManager->SearchBooks($var);
    $genre = $BookManager->getGenres();

    require('view/SearchView.php');
}

function GenreSearch($var, $g)
{
    $BookManager = new BookManager();
    $books = $BookManager->SearchGenre($var, $g);
    $genre = $BookManager->getGenres();

    require('view/SearchView.php');
}

function addbook()
{
    $BookManager = new BookManager();
    $Max = $BookManager->GetMaxBookID();
    $genre = $BookManager->getGenres();
    $authorManager = new AuthorManager();
    $Authors = $authorManager->getAuthors();
    require('view/AddBookView.php');

}

function addAuthor()
{
    $BookManager = new AuthorManager();
    $Max = $BookManager->GetMaxAuthorID();
    require('view/AddAuthorView.php');

}

function addEvent()
{
    $EventManager = new EventManager();
    $Max = $EventManager->GetMaxEventID();
    require('view/AddEventView.php');

}


function uploadBook($bookTitle, $bookDisc, $AuthorID, $genreID)
{

    $BookManager = new BookManager();
    $affectedLines = $BookManager->postBook($bookTitle, $bookDisc, $AuthorID, $genreID);
    var_dump($affectedLines);
    $BookManager->upload($_GET['id'], 'img/booksCover/cover');


    if ($affectedLines === false) {
        echo 'Impossible d\'ajouter le livre!';

    } else {
        header('Location: index.php?action=listBooks');
    }

}


function uploadAuthor($NameAuthor, $DiscAuthor)
{
    $BookManager = new AuthorManager();
    $affectedLines = $BookManager->postAuthor($NameAuthor, $DiscAuthor);
    $BookManager->upload($_GET['id'], 'img/AuthorPortrait/author');


    if ($affectedLines === false) {
        echo 'Impossible d\'ajouter l\'auteur!';

    } else {
        header('Location: index.php');
    }
//    require ('view/BookView.php');
}

function uploadevent($event, $eventDisc, $eventDate)
{

    $EventManager = new EventManager();

    $affectedLines = $EventManager->postEvent($event, $eventDisc, $eventDate);

    $EventManager->upload($_GET['id'], 'img/EventsPhotos/event');


    if ($affectedLines === false) {
        echo 'Impossible d\'ajouter le livre!';

    } else {
        header('Location: index.php');
    }


}

function BookView($id)
{
    $bookManager = new BookManager();
    $book = $bookManager->getBook($id);
    require('View/BookView.php');
}


function AuthorView($id)
{
    $AuthorManager = new AuthorManager();
    $author = $AuthorManager->getAuthor($id);

    require('View/AuthorView.php');
}

function ImageExists($ImagePath)
{
    $Ext = array('.jpg', '.png', '.jpeg');
    foreach ($Ext as $ext) {
        if (file_exists($ImagePath . $ext)) {

            return $ext;

        }
    }
    return false;


}

function deleteElement($element, $id)
{

    switch ($element) {
        case 'book':
            $bookManager = new BookManager();
            $affectedlines = $bookManager->DeleteBook($id);
            header('Location: index.php?action=listBooks');

            break;

        case 'author':
            $authorManager = new AuthorManager();
            $affectedlines = $authorManager->DeleteAuthor($id);
            header('Location: index.php?action=listAuthors');

            break;
        case 'event':
            $eventManager = new EventManager();
            $affectedlines = $eventManager->DeleteEvent($id);

            break;
        default:
            echo "error";


    }


}

