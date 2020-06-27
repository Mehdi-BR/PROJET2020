 <?php
  session_start();

  include_once 'db/db.php';
  if ($_SESSION['stat']== 0) {
  $src = 'img/profile'.$_SESSION['id'].'.jpg?';
    }else{
  $src = 'img/profiledefault.png?';

    }
    

?>
 <!doctype html>
<html lang="en">
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>

<?php include("header.php");?>
<div class="container">
    <div class="row m-4">
        <div class="">
            <h1><svg class="bi bi-pencil-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.502 1.94a.5.5 0 010 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 01.707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 00-.121.196l-.805 2.414a.25.25 0 00.316.316l2.414-.805a.5.5 0 00.196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 002.5 15h11a1.5 1.5 0 001.5-1.5v-6a.5.5 0 00-1 0v6a.5.5 0 01-.5.5h-11a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5H9a.5.5 0 000-1H2.5A1.5 1.5 0 001 2.5v11z" clip-rule="evenodd"/>
                </svg> modifier profile:</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card shadow" style="width: 18rem;">
                <img src="<?php echo $src; ?>" class="img-thumbnail card-img-top rounded mx-auto d-block" id='img-upload'/>
                <div class="card-body">
                    <p class="card-text text-center"><?php echo $_SESSION['nom']." ".$_SESSION['prenom']; ?></p>
                </div>
            </div>
        </div>
        <form method="POST" action="db/infoupconf.php" enctype="multipart/form-data"> 
        <div class="col">
            <div class="container">
                <label >Actualisez votre image de profile:</label>
                <div class="form-row form-group">
                    <div class="image-browse">



                        <div class="col">


                            <div class="input-group">
                                
                                <div class="custom-file">
                                     <input type="file" name="image" />
                                </div>
                                 
                         
                            </div>


                        </div>

                    </div>
                </div>
                <div class="form-row form-group">

                    <label >Nom:</label>
                    <input type="text" name="nom" class=" form-control " placeholder="Nom">
                </div>
                <div class="form-row form-group">
                    <label >Prenom:</label>
                    <input type="text" name="prenom" class=" form-control" placeholder="Prenom">
                </div>

                <div class="form-row form-group">
                    <label for="exampleDropdownFormPassword1">Mot de passe:</label>
                    <input type="password" name="mdp" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                </div>
                <div class="form-row form-group">
                    <label for="exampleDropdownFormPassword1">Nouveau mot de passe:</label>
                    <input type="password" name="nmdp" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                </div>
                <div class="form-row form-group">
                    <label for="exampleDropdownFormPassword1">Confirmer nouveau mot de passe:</label>
                    <input type="password" name="cnmdp" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                </div>
                <div class="form-row d-link justify-content-between">
                    <div class="form-col form-group">
                        <label for=date">Date de naissance:</label>
                        <input type="date" name="date" class="form-control" >
                    </div>
                    <div class="form-col form-group">
                        <label for="quartier">Quartier:</label>
                        <input type="text" name="quartier" class="form-control" id="quartier" placeholder="Quartier">
                    </div></div>
                <div class="form-row form-group">
                    <button type="submit" name="submit" class="btn btn-secondary">Enregistrer modification</button>
                </div>
            </form>

            </div>

        </div>
    </div>



</div>




<?php include("footer.php");?>

<?php include("sidebar.php");?>
<script>
    
    $(document).ready( function() {
        $(document).on('change', '.btn-file :file', function() {
            var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function(event, label) {

            var input = $(this).parents('.input-group').find(':text'),
                log = label;

            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }

        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function(){
            readURL(this);
        });
    });
</script>
</body>
</html>

