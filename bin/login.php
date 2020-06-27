
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>



<div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
    <div class="modal-dialog"  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <form class="px-4 py-3" action="db/loginconf.php" method="POST">
                    <div class="form-group">
                        <label >Email address</label>
                        <input type="email" class="form-control" 
                        name="email" placeholder="email@example.com">
                    </div>
                    <div class="form-group">
                        <label >Password</label>
                        <input type="password" class="form-control" 
                        name="mdp" placeholder="Password">
                    </div>


                
              <div class="list-group list-group-flush bg-light">
                  <a href="#" data-toggle="modal" data-target="#SignupModal" class="list-group-item list-group-item-action d-flex justify-content-center bg-light" id="nav">pas encore inscrit cliquez ici pour s'inscririe</a>
               </div>
          
            <div class="modal-footer">
                <button type="submit" name="login" class="btn btn-secondary">S'identifier</button>
            </div>
            </form>
        </div>
        </div>
    </div>
</div>

<div class="modal fade" id="SignupModal" tabindex="-1" role="dialog">
    <div class="modal-dialog"  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">s'inscrire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <form class="px-4 py-3" action="db/newsignup.php" method="POST">
                    <div class="form-row d-link justify-content-between">
                    <div class="form-col form-group">
                        <label >Nom:</label>
                        <input type="text" class=" form-control " placeholder="Nom"
                         name="nom">
                    </div>
                        <div class="form-col form-group">
                            <label >Prenom:</label>
                            <input type="text" class=" form-control" placeholder="Prenom" name="prenom">
                        </div></div>
                    <div class="form-row form-group">
                        <label >Adresse email:</label>
                        <input type="email" class="form-control" placeholder="email@example.com"  name="email" >
                    </div>
                    <div class="form-row form-group">
                        <label >Mot de passe:</label>
                        <input type="password" class="form-control" placeholder="Mot de passe"
                        name="mdp">
                    </div>
                    <div class="form-row form-group">
                        <label >Confirmer mot de passe:</label>
                        <input type="password" class="form-control" placeholder="Confirmer mot de passe"
                        name="cmdp">
                    </div>
                    <div class="form-row d-link justify-content-between">
                        <div class="form-col form-group">
                            <label ">Date de naissance:</label>
                            <input type="date" class="form-control"
                            name="date" >
                        </div>
                        <div class="form-col form-group">
                            <label >Quartier:</label>
                            <input type="text" class="form-control" placeholder="Quartier"
                            name="quartier">
                        </div></div>
                    <label >Genre:</label>
                    <div class="form-row " id="genre">

                        <div class="form-check">
                            <label class="form-check-label mr-4">
                                <input type="radio" class="form-check-input" name="genre"  value="homme" >
                               Homme
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="genre" value="femme">
                                Femme
                            </label>
                        </div>
                        </div>

                



            </div>
            <div class="modal-footer">

                 
                 <button type="submit" name="signup" class="btn btn-secondary">S'inscrire</button>
            </div>
            </form>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('#loginModal').modal('show');
    });
</script>
</body>
</html>
