<?php
session_start();

  include_once 'db/db.php';
  
 
?>
<!doctype html>
<html lang="en">
<head>
    <title>Home</title>
</head>
<body>

<?php include("header.php");?>
<br>
<nav class="search-bar navbar navbar-expand-lg navbar-light navbar-fix bg-light ">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <!--<img src="/img/books/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">-->
            <svg class="bi bi-book" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 018.5 2.5v11a.5.5 0 01-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 010 13.5v-11a.5.5 0 01.276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 01.22-.103 12.958 12.958 0 012.7-.869zM1 2.82v9.908c.846-.343 1.944-.672 3.074-.788 1.143-.118 2.387-.023 3.426.56V2.718c-1.063-.929-2.631-.956-4.09-.664A11.958 11.958 0 001 2.82z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 007.5 2.5v11a.5.5 0 00.854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0016 13.5v-11a.5.5 0 00-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 00-.799-.34 12.96 12.96 0 00-2.073-.609zM15 2.82v9.908c-.846-.343-1.944-.672-3.074-.788-1.143-.118-2.387-.023-3.426.56V2.718c1.063-.929 2.631-.956 4.09-.664A11.956 11.956 0 0115 2.82z" clip-rule="evenodd"/>
            </svg>
            <strong>Trouver votre livre:</strong>
        </a>
    </nav>

    <div class="collapse navbar-collapse row navbar-nav" id="navbarSupportedContent">
        <div class="col-3"> </div>
        <div class="col nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                langue
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">français</a>
                <a class="dropdown-item" href="#">Arabe</a>

                <a class="dropdown-item" href="#">Anglais</a>
            </div>
        </div>
        <div class=" col nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ciecles
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">15</a>
                <a class="dropdown-item" href="#">16</a>

                <a class="dropdown-item" href="#">18</a>
            </div>
        </div>
        <div class=" col nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                genres
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Comedie</a>

                <a class="dropdown-item" href="#">Literaturee</a>
            </div>
        </div>


        <form class=" col-4 form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="titre du livre" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher</button>
        </form>
    </div>

</nav>

<div class="container mt-4">
    <div class="row">
        <div class="col ">
            <a class="text-secondary" href="bookdescription.php"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
    </div>
    <div class="row">
        <div class="col ">
            <a class="text-secondary" href="bookdescription.php"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
    </div>
    <div class="row">
        <div class="col ">
            <a class="text-secondary" href="bookdescription.php"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
    </div>
    <div class="row">
        <div class="col ">
            <a class="text-secondary" href="bookdescription.php"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
    </div>
    <div class="row">
        <div class="col ">
            <a class="text-secondary" href="bookdescription.php"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
    </div>
    <div class="row">
        <div class="col ">
            <a class="text-secondary" href="bookdescription.php"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
    </div>
    <div class="row">
        <div class="col ">
            <a class="text-secondary" href="bookdescription.php"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
    </div>
    <div class="row">
        <div class="col ">
            <a class="text-secondary" href="bookdescription.php"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
        <div class="col">
            <a class="text-secondary" href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                <h6 class="text-center sommaire">julia s'story</h6></a>
        </div>
    </div>
</div>

<!--
<div class="container mt-4">

    <div class="row">
        <div class="col ">

        </div>
        <div class="col">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    genres
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class="col">
            annee de publication
        </div>
        <div class="col">
            forum
        </div>
    </div>
</div>

<div id="carouselExampleControls" class="carousel slide mt-4" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active ">
            <div class="container d-flex justify-content-around">
             <a href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                    <h6 class="text-center">julia s'story</h6></a>
                <a <a href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                    <h6 class="text-center">julia s'story</h6></a>
                <a href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                    <h6 class="text-center">julia s'story</h6></a>
                <a href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                    <h6 class="text-center">julia s'story</h6></a>
            </div>
        </div>

            <div class="carousel-item ">
                <div class="container d-flex justify-content-around">
                  <a href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                      <h6 class="text-center">julia s'story</h6></a>
                  <a <a href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                      <h6 class="text-center">julia s'story</h6></a>
                  <a href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                      <h6 class="text-center">julia s'story</h6></a>
                    <a href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                        <h6 class="text-center">julia s'story</h6></a>
                </div>
            </div>


        <div class="carousel-item ">
            <div class="container d-flex justify-content-around">
                <a href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                   <h6 class="text-center">julia s'story</h6></a>
               <a <a href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                   <h6 class="text-center">julia s'story</h6></a>
               <a href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                   <h6 class="text-center">julia s'story</h6></a>
                <a href="#"><img src="img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                    <h6 class="text-center">julia s'story</h6></a>
            </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


-->
<?php include("footer.php");?>

<?php include("sidebar.php");?>
</body>
</html>