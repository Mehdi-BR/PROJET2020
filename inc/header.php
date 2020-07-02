
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?=$title?></title>
    <title>Simple Sidebar - Start Bootstrap Template</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

<div class="d-flex" id="wrapper">


    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <?php if($_SESSION['confirmed']==1){ echo '
        <nav class="navbar navbar-dark bg-dark">

            <div class="col-2 navbar-brand"> <a   href="#"><img ID="logo"  src="img/logo.png"></a>

            </div>
            <div class="col-1">
                <a href="index.php" class="nav-link text-white" href="#">Accuille<span class="sr-only">(current)</span></a>
            </div>
            <div class="col-1">
                <a class="nav-link text-white" href="index.php?action=listEvents">Evenement</a> 
            </div>

            <div class="col-2 ">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Notre Bibliothéque
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="index.php?action=listBooks">Nos livres</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.php?action=listAuthors">Nos Auteurs</a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?action=search">chercher un livre</a>
            </div>
            </div>' ?>
            <?php
            if($_SESSION['admin']==1) {

                echo '<div class="col-3">
                    <a class="nav-link text-white" href="index.php?action=confirmer">les Utilisateurs non confirmés</a>
                </div>';
            }
            ?><?php echo '
            <div class="col-2 d-flex justify-content-end ">
                <button id="menu-toggle" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>';
    }?><?php if($_SESSION['confirmed']==0){ echo '
        <nav class="navbar navbar-dark bg-dark">

            <div class="col-2 navbar-brand"> <a   href="index.php" ><img ID="logo"  src="img/logo.png"></a>

            </div>
            <div class="col-1">
                <a href="index.php" class="nav-link text-white" href="index.php">Accuille<span class="sr-only">(current)</span></a>
            </div>
            <div class="col-1">
                <a class="nav-link text-white" href="index.php"data-toggle="modal" data-target="#nonconf">Evenement</a> 
            </div>

            <div class="col-2 ">
                <a class="nav-link dropdown-toggle text-white" href="index.php" data-toggle="modal" data-target="#nonconf">
                   Notre Bibliothéque
                </a>
                
            </div>
            <div class="col-2 d-flex justify-content-end ">
                <button id="menu-toggle" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>';
    }?>

    <div class="modal fade" id="nonconf" tabindex="-1" role="dialog">
    <div class="modal-dialog"  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">identifiez vous:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                

                    <p>veuillez confirmez votre compte<p>

                    
                </form>
            </div>
        </div>
    </div>
</div>
