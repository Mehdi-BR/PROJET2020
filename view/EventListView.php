<?php

$title = htmlspecialchars('Events list')?>

<?php $Top=$top->fetch();?>



<?php ob_start(); ?>
    <div class="container mt-4 text-center">
        <div class="card mt-4" style="width:1045px;">
            <div class="card-header">
                <div class="row">
                <div class="col"><h1>Liste des evenement:</h1></div>
                <div class="col text-right"> <?php
                    if($_SESSION['admin']==1){
                        ?>
                        <div class="col text-right"><a class="btn btn-outline-secondary" id="button" href="index.php?action=AddEvent"
                                                       role="button">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                                    <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                                    <path fill-rule="evenodd"
                                          d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                </svg>
                                Ajouter Evenement</a></div>


                    <?php  }
                    ?> </div></div>

            </div>
            <div class="card-body">
                <div class="row mb-4">

                    <div class="col mb-4">


                        <div id="carouselExampleIndicators" class="carousel slide event" data-ride="carousel">

                            <div class="carousel-inner">

                                <?php while ($event=$Events->fetch()){
                                    if($event['eventID']==$Top['0']){
                                        $str="active";
                                    }else $str=""

                                    ?>

                                    <div class="carousel-item <?=$str?>  ">
                                        <?php
                                        $ext=ImageExists("img/EventsPhotos/event". $event['eventID']);
                                        if($ext!=false) {
                                            ?>
                                            <img class="event" src="img/EventsPhotos/event<?= $event['eventID'] ?><?= $ext ?>" alt=" ...">
                                            <?php
                                        }      else{
                                            ?>

                                            <img class="event" src="img/EventsPhotos/event0.png" alt="...">
                                        <?php }?>
                                        <div class="carousel-caption d-none d-md-block event-disc" style="height: 170px">
                                            <div class=" text-dark ">
                                            <h5 class=""><?=$event['event']?></h5>
                                            <h6 class="mt-4"><?=$event['eventDescription']?></h6>
                                            <p>le <?=$event['eventDate']?></p></div>
                                            <button type="button" data-toggle="modal" data-target="#conf" class="btn btn-danger"><svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg> Suprimer evenement</button>
                                        </div>

                                    </div>
                                    <div class="modal fade" id="conf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"><svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                        </svg> Suprimer evenement:</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    est-ce-que vous voulez vraiment suprimer cet evenement?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                    <form action="index.php?action=DeleteEvent&amp;id=<?=$event['eventID']?>" method="post">
                                                        <button type="submit" class="btn btn-primary">Suprimer</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>




    </div>


<?php
$content=ob_get_clean();

require('TemplateLoggedIn.php');