


<?php

try {
    require('Controller/Controller.php');
if(isset($_GET['action'])) {
    if ($_GET['action'] == 'login') {
        login($_POST['email'], $_POST['mdp']);

    } elseif ($_GET['action'] == 'signup') {
        if ($_POST['mdp'] == $_POST['cmdp']) {

            signup();
        }
    } elseif($_GET['action'] == 'ProfileInfo') {

ProfileInfo();
}elseif($_GET['action'] == 'UpdateProfile') {

        UpdateProfile();


    }elseif ($_GET['action'] == 'listBooks') {
            listBooks();
        }elseif($_GET['action'] == 'listFavorites'){
            listFavorites();
        } elseif ($_GET['action'] == 'listAuthors') {
            listAuthors();}
        elseif ($_GET['action'] == 'addbook') {
            addbook();
        } elseif ($_GET['action'] == 'uploadBook') {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                var_dump($_POST);
                uploadBook($_POST['titleBook'], $_POST['discBook'], $_POST['author'],$_POST['genreID']);

            }
        } elseif ($_GET['action'] == 'addAuthor') {
            addAuthor();
        } elseif ($_GET['action'] == 'uploadAuthor') {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                uploadAuthor($_POST['NameAuthor'], $_POST['DiscAuthor']);
            }
        }elseif ($_GET['action'] == 'BookPage') {
            if (isset($_GET['id']) ) {
                $id = $_GET['id'];
                BookView($id);
            }}
        elseif ($_GET['action'] == 'AuthorPage') {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
               AuthorView($id);}
    }     elseif ($_GET['action'] == 'listEvents') {

           listEvents();}
        elseif ($_GET['action'] == 'AddEvent') {
            addEvent();
        }elseif ($_GET['action'] == 'uploadEvent') {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                uploadEvent($_POST['event'], $_POST['eventDescription'], $_POST['eventDate'],$id);
            }
        }elseif ($_GET['action'] == 'search'){
            search();
        }elseif ($_GET['action'] == 'searchbook'){
            if($_POST['genreID']!='all'){
        GenreSearch($_POST['var'],$_POST['genreID']);
            }else{
            SearchBook($_POST['var']);}
        }elseif ($_GET['action'] == 'AddFav'){
            if (isset($_GET['id'] )and isset($_GET['uid'] )) {
                $id = $_GET['id'];
                $uid = $_SESSION['id'];
AddFavourite($id,$uid);

        }
        }elseif ($_GET['action'] == 'DelFav'){
            if (isset($_GET['id'] )and isset($_GET['uid'] )) {
                $id = $_GET['id'];
                $uid = $_SESSION['id'];
                DelFavourite($id,$uid);}

        }elseif ($_GET['action'] =='DeleteBook'){
            if (isset($_GET['id']) ){
                $id= $_GET['id'];

                deleteElement('book',$id);
            }

        }elseif ($_GET['action'] =='DeleteAuthor'){
            if (isset($_GET['id']) ){
                $id= $_GET['id'];

                deleteElement('author',$id);
            }

        }elseif ($_GET['action'] =='DeleteEvent'){
            if (isset($_GET['id']) ){
                $id= $_GET['id'];

                deleteElement('event',$id);
            }

        }
        elseif ($_GET['action'] =='logout'){
           logout();
          
    }elseif(isset($_GET['action']))
    {if($_GET['action'] == 'confirmer') {
        GetNonConfUsers();}
        if($_GET['action'] == 'conf') {
            ConfirmUsers($_GET['id']);

        }
    }
}

    else {
            HomePage();
        }


}catch(exeption $e){
    $errorMessage = $e->getMessage();
}
