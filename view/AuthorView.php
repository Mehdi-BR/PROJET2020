
<?php
$title = htmlspecialchars($author['AuthorName'])?>

<?php ob_start(); ?>
<?php
$ext= ImageExists('img/AuthorPortrait/author'.$author['AuthorID']);
if(!$ext){
    $img='unknowenAuthor.png';

}else{
    $img='author'.$author['AuthorID'].$ext;
}
?>

<div class="container">

    <div class="row">
        <div class="col-5 mt-4">
            <img class="shadow img-thumbnail cover-Desc" src="img/AuthorPortrait/<?=$img?>" alt="<?=$author['AuthorName']?>">
        </div>
        <div class="col mr-4">
            <div class="card mt-4 shadow">
                <div class="card-header ">
                    <h3><?=$author['AuthorName']?></h3>
                </div>
                <div class="card-body">

                    <p class="card-text"><?=$author['AuthorBio']?></p>
                    <button type="button" data-toggle="modal" data-target="#conf" class="btn btn-danger"><svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg> Suprimer Auteur</button>
                </div>
            </div>


        </div>
    </div>

<!---->
<!--</div>-->
<!--<div class="row-4 text-right">-->
<!---->
<!--    <button type="button" data-toggle="modal" data-target="#conf" class="btn btn-danger"><svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">-->
<!--            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>-->
<!--            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>-->
<!--        </svg> Suprimer Auteur</button>-->
<!--</div>-->
<!--<div class="row">-->
<!--    <div class="col">-->
<!--        <img class="image" src="img/AuthorPortrait/--><?//=$img?><!--" alt="--><?//=$author['AuthorName']?><!--">-->
<!--    </div>-->
<!--    <div class="col text-right">-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi architecto-->
<!--            aspernatur consequatur deserunt eos ex facilis,-->
<!--            fuga impedit laudantium magni nesciunt non, perferendis quibusdam-->
<!--            quos repellat repudiandae saepe, voluptates!--><?//=$author['AuthorBio']?><!--</p>-->
<!---->
<!--    </div>-->
<!--</div>-->
<!---->
<!---->
<!---->
<!---->
<!---->





<!--confهrm modal-->
<div class="modal fade" id="conf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg> Suprimer le auteur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                est-ce-que vous voulez vraiment suprimer cet auteur?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <form action="index.php?action=DeleteAuthor&amp;id=<?=$id?>" method="post">
                    <button type="submit" class="btn btn-primary">Suprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php



$content=ob_get_clean();

require('TemplateLoggedIn.php');