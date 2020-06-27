<?php $title = 'Books List'; ?>

<?php ob_start(); ?>


<div class="container">
    <h1>la liste des livres:</h1>

    <a id="button" href="index.php?action=addbook" >Ajouter Livre</a>
    <a id="button" href="index.php?action=addAuthor" >Ajouter Auteur</a>
    <br>
    <br>
<?php

$numberOfColumns = 4;
$rowCount=0;
$bootstrapCol=12/$numberOfColumns;
while ( $data = $books->fetch()){
    if ($rowCount % $numberOfColumns == 0)
    { ?> <div class="row"> <?php }  $rowCount++; ?>
    <div class="col-sm-<?=$bootstrapCol?> mb-4">
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

<?php require('TemplateLoggedIn.php'); ?>
