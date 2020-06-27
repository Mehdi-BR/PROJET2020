
<?php $title='Modifier votre profile';?>
<?php ob_start();?>
<?php
$ext= ImageExists('img/userProfile/user'.$_SESSION['id']);
if(!$ext){
    $img='profiledefault.png';

}else{
    $img='user'.$_SESSION['id'].$ext;
}
?>


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
                    <img src="img/userProfile/<?=$img?>" class="img-thumbnail card-img-top rounded mx-auto d-block" id='img-upload'/>
                    <div class="card-body">
                        <p class="card-text text-center"><?php echo $user['nom']." ".$user['prenom']; ?></p>
                    </div>
                </div>
            </div>
            <form method="POST" action="index.php?action=UpdateProfile" enctype="multipart/form-data">
                <div class="col">
                    <div class="container">
                        <label >Actualisez votre image de profile:</label>
                        <div class="form-row form-group">
                            <div class="image-browse">



                                <div class="col">


                                    <div class="input-group">

                                        <div class="custom-file">
                                            <input type="file" name="image" id="user<?=$_SESSION['id']?>">
                                        </div>


                                    </div>


                                </div>

                            </div>
                        </div>
                        <div class="form-row form-group">

                            <label >Nom:</label>
                            <input type="text" name="nom" class=" form-control " placeholder="<?=$user['nom']?>">
                        </div>
                        <div class="form-row form-group">
                            <label >Prenom:</label>
                            <input type="text" name="prenom" class=" form-control" placeholder="<?=$user['prenom']?>">
                        </div>

                        <div class="form-row form-group">
                            <label for="exampleDropdownFormPassword1">Mot de passe:</label>
                            <input type="password" name="mdp" class="form-control" id="exampleDropdownFormPassword1" placeholder="mot de passe" required>
                        </div>
                        <div class="form-row form-group">
                            <label for="exampleDropdownFormPassword1">Nouveau mot de passe:</label>
                            <input type="password" name="nmdp" class="form-control" id="exampleDropdownFormPassword1" placeholder="mot de passe">
                        </div>
                        <div class="form-row form-group">
                            <label for="exampleDropdownFormPassword1">Confirmer nouveau mot de passe:</label>
                            <input type="password" name="cnmdp" class="form-control" id="exampleDropdownFormPassword1" placeholder="mot de passe">
                        </div>
                        <div class="form-row d-link justify-content-between">
                            <div class="form-col form-group">
                                <label for=date">Date de naissance:</label>
                                <input type="date" name="date" class="form-control" >
                            </div>
                            <div class="form-col form-group">
                                <label for="quartier">Quartier:</label>
                                <input type="text" name="quartier" class="form-control" id="quartier" placeholder="<?=$user['quartier']?>">
                            </div></div>
                        <div class="form-row form-group">
                            <button type="submit" name="submit" class="btn btn-secondary">Enregistrer modification</button>
                        </div>
            </form>

        </div>

    </div>
    </div>



    </div>





<?php $content=ob_get_clean();?>
<?php require('TemplateLoggedIn.php');