<?php $title = 'chercher livre'; ?>

<?php ob_start(); ?>
<div class="container">

    <nav class= "mt-4 mb-4 shadow navbar navbar-expand-lg navbar-light navbar-fix bg-light">
        <div class="row navbar-nav mr-auto"></div>
        <div class="col">
        <h4 class="navbar-brand" >
<svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
    </svg> Trouvez votre livre:</h4>
</div>

<form class="form-group" action="index.php?action=searchbook" method="POST">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

<!--            <li class="nav-item active">-->
<!--                <label for="var">titre:</label>-->
<!--            </li>-->
        <div class="col-1 nav-item">
            <label for="var">titre:</label>
        </div>
<!--    <label for="var">titre:</label>-->
        <div class="col nav-item">
            <input class="form-control" type="text" name="var" placeholder="Search..">
        </div>


<!--    <input class="form-control" type="text" name="var" placeholder="Search..">-->
        <div class="col-1 nav-item">
            <label for="genreID">Genre:</label>
        </div>


        <div class="col nav-item">
            <!--    <label for="genreID">Genre:</label>-->
    <select class="form-control browser-default custom-select" name="genreID" class="form-control" id="genreID" required>
        <option value="all">---- -----</option>
        <?php

        while($Genre=$genre->fetch()) {
            ; ?>
            <option value="<?= $Genre['genreID'] ?>" ><?= $Genre['genre'] ?></option>

            <?php

        }
        ?>
    </select>
        </div>
        <div class="col-2">
        <div class="btn text-right">
                <button class="btn btn-primary" type="submit" >Chercher </button>
            </div>
        </div>
    </div>

</form>
    </nav>

    <!--        --><?php
    //        echo '<option value=\'all\'>All</option>';
    //        while ($rows = $greq->fetch()) {
    //            $gen = $rows['genre'] ;
    //
    //
    //            echo '<option value='.$rows['id'].'> '.$gen.' </option> ' ;
    //        }
    //        ?>



<?php






$numberOfColumns = 4;
$rowCount=0;
$bootstrapCol=12/$numberOfColumns;
while ( $data = $books->fetch()){
    if ($rowCount % $numberOfColumns == 0)
    { ?> <div class="row"> <?php }  $rowCount++; ?>
    <div class="col-sm-<?=$bootstrapCol?> text-center">
        <a href="index.php?action=BookPage&amp;id=<?=$data['BookID']?>">
            <?php
            $ext= ImageExists("img/booksCover/cover".$data['BookID']);
            if(!$ext){?>

                <img class="cover" src="img/booksCover/unknownBook.png" alt="<?=$data['BookTitle']?>" >

                <?php
            }else {


                ?>
                <img class="cover" src="img/booksCover/cover<?= $data['BookID'] ?><?= $ext ?>" alt="<?= $data['BookTitle'] ?>">

                <?php
            }
            ?>







            <h3>
                <?= htmlspecialchars($data['BookTitle']) ?>

            </h3></a></div>
    <?php

    if($rowCount % $numberOfColumns == 0){ ?> </div> <?php }}
?>
    <?php
    if($rowCount % 4 !=0){
        echo "</div>";
    }
    ?>


</div>




<?php

$books->closeCursor();


?>


<?php $content = ob_get_clean(); ?>

<?php require('view/TemplateLoggedIn.php'); ?>
