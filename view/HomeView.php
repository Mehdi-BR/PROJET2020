
<?php $title='Home Page';?>
<?php ob_start()?>
<div class="container-fluid">
    <div class="row  mt-4 mb-4">
        <div class="col">
            <div class="shadow card info-card text-white bg-dark mb-3" >
               <div class="card-header"><h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-book-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.261 13.666c.345.14.739-.105.739-.477V2.5a.472.472 0 0 0-.277-.437c-1.126-.503-5.42-2.19-7.723.129C5.696-.125 1.403 1.56.277 2.063A.472.472 0 0 0 0 2.502V13.19c0 .372.394.618.739.477C2.738 12.852 6.125 12.113 8 14c1.875-1.887 5.262-1.148 7.261-.334z"/>
                        </svg> Information sur notre bibliothèque:</h3></div>
                <div class="card-body">
<br>
                    <p class="card-text info font-weight-normal ">Située à la ville du M’DIQ, la bibliothèque du quartier est un projet réalisé par INDH (initiative nationale du développement humain).<br>
                        Ce projet a été lancé le 16/09/2009 avec l'inauguration du Gouverneur EL YAAKOUBI afin de créer un espace aux élèves pour étudier, lire des livres et naviguer sur internet.<br>
                        C'était une grande initiative pour une petite ville tel que M’DIQ, mais elle a connue beaucoup de reconnaissance de la part des habitants du quartier.
                    </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div id="biblio" class="carou carousel slide shadow" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="carou " src="img/Biblio/biblio.png" alt="First slide">
                    </div>

                    <?php
                    for($i=1;$i<9;$i++){
                        echo '<div class="carousel-item">
                        <img class="carou " src="img/Biblio/biblio'.$i.'.jpg" alt="Second slide">
                    </div>';
                    }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#biblio" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#biblio" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row mt-4 mb-4">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="card-title"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list-stars" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
                            <path d="M2.242 2.194a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.277.277 0 0 0-.094.3l.173.569c.078.256-.213.462-.423.3l-.417-.324a.267.267 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.277.277 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.271.271 0 0 0 .259-.194l.162-.53zm0 4a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.277.277 0 0 0-.094.3l.173.569c.078.255-.213.462-.423.3l-.417-.324a.267.267 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.277.277 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.271.271 0 0 0 .259-.194l.162-.53zm0 4a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.277.277 0 0 0-.094.3l.173.569c.078.255-.213.462-.423.3l-.417-.324a.267.267 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.277.277 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.271.271 0 0 0 .259-.194l.162-.53z"/>
                        </svg> Nos nouveaux livres:</h3>

                </div>
            </div>

            <div id="carouselExampleControls" class="carousel shadow slide  bg-secondary" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $NumCol=4;
                    $CarouselCount=0;
                    $active='active';
                    while($data=$books->fetch()){
                        if($CarouselCount%4==0){
                            ?><div class="carousel-item <?=$active?> ">
                        <div class="container d-flex justify-content-around"> <?php }
                        $CarouselCount++;?>
                        <a href="#" class="text-light"><?php
                            $ext= ImageExists("img/booksCover/cover".$data['BookID']);
                            if(!$ext){?>

                                <img class="book-cover img-thumbnail" style="width: 170px; height: 300px " src="img/booksCover/unknownBook.png" alt="<?=$data['BookTitle']?>" >

                                <?php
                            }else {


                                ?>
                                <img class="book-cover img-thumbnail" style="width: 170px; height: 300px " src="img/booksCover/cover<?= $data['BookID'] ?><?= $ext ?>" alt="<?= $data['BookTitle'] ?>">

                                <?php
                            }
                            ?>
                                <h6 class="text-center "><?=$data['BookTitle']?></h6></a>
                                <?php
                                if($CarouselCount%$NumCol==0){
                                ?></div></div><?php
                                }
                    $active='not-active';
                    }
                    if($CarouselCount%4==0){
                        echo'</div>';
                    }
                    ?>

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

        </div>



</div>
<?php $content = ob_get_clean(); ?>

<?php

if (isset($_SESSION['id']) and $_SESSION['id'] != NULL) {
    require('TemplateLoggedIn.php');
} else {
    require('templateNotLoggedIn.php');

}
