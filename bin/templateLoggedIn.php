<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title><?=$title?> </title>
</head>
<body>


<div class="d-flex" id="wrapper">


    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-dark bg-dark">

            <div class="col-2"> <a class="navbar-brand" href="#">Logo</a>

            </div>
            <div class="col-1">
                <a class="nav-link text-white" href="HomeView.php">Home<span class="sr-only">(current)</span></a>
            </div>
            <div class="col-1">
                <a class="nav-link text-white" href="#">Evenement</a>
            </div>
            <div class="col-2 ">
                <a class="nav-link  text-white" href="BooksListView.php" aria-haspopup="true" aria-expanded="false">

                    Nos Livres</a>

            </div>
            <div class="col-1">
                <a class="nav-link text-white" <?=$admin?>  href="#">les utilisateur</a>
            </div>
            <div class="col-2 d-flex justify-content-end ">
                <button id="menu-toggle" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>


    <?=$content;?>


        <div class="footer bg-dark" style="position: fixed">
            <p><small>Copyright &copy; Your Website</small></p>
        </div>


    </div>
    <!-- /#page-content-wrapper -->
    <div class="bg-dark" id="sidebar-wrapper">
        <!--<div class="sidebar-heading"></div>-->
        <div class="list-group list-group-flush bg-light">

            <div class="list-group-item list-group-item-action container d-flex justify-content-center bg-dark" >

                <a href="#">

                    <h6 class="text-white"> <?php echo $user['nom']." ".$user['prenom']; ?></h6>
                </a>
            </div>

            <a href="view/ProfileEditView.php" class="list-group-item list-group-item-action d-flex justify-content-center bg-dark" id="nav"><h6 class="text-white">Mon profile</h6></a>
            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-center bg-dark" id="nav"><h6 class="text-white">Ma bibliothéque</h6></a>
            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-center bg-dark" id="nav"><h6 class="text-white">Se déconecter</h6></a>
        </div>

    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</body>
</html>