<?php $title = 'Authors List'; ?>

<?php ob_start(); ?>
<div class="container">
<h1>la liste des Auteurs:</h1>

<a id="button" href="index.php?action=addbook" >Ajouter Livre</a>
<a id="button" href="index.php?action=addAuthor" >Ajouter Auteur</a>
<br>
<br>

<?php






$numberOfColumns = 4;
$rowCount=0;
$bootstrapCol=12/$numberOfColumns;
while ( $data = $authors->fetch()){
    if ($rowCount % $numberOfColumns == 0)
    { ?> <div class="row"> <?php }  $rowCount++; ?>
    <div class="col-sm-<?=$bootstrapCol?>">
        <a href="index.php?action=AuthorPage&amp;id=<?=$data['AuthorID']?>">
        <?php



        $ext= ImageExists("img/AuthorPortrait/author".$data['AuthorID']);
        if(!$ext){?>

            <img class="cover" src="img/AuthorPortrait/unknowenAuthor.png" alt="<?=$data['AuthorName']?>" >
            <?php
        }else {


            ?>
            <img class="cover" src="img/AuthorPortrait/author<?=$data['AuthorID']?><?= $ext ?>" alt="<?= $data['AuthorName'] ?>">

            <?php
        }
        ?>





        <h3>
            <?= htmlspecialchars($data['AuthorName']) ?>

        </h3></a></div>
    <?php

    if($rowCount % $numberOfColumns == 0){ ?> </div> <?php }}




    if($rowCount % 4 !=0){
        echo "</div>";
    }
    ?>






</div>


<?php

$authors->closeCursor();


?>


<?php $content = ob_get_clean(); ?>

<?php require('TemplateLoggedIn.php'); ?>
