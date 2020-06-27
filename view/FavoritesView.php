<?php $title = 'Books List'; ?>

<?php ob_start(); ?>
<h1>la liste des livres Favorits:</h1>

<div class="container">
<?php
$numberOfColumns = 4;
$rowCount=0;
$bootstrapCol=12/$numberOfColumns;
while ( $data = $fav->fetch()){
if ($rowCount % $numberOfColumns == 0)
{ ?> <div class="row"> <?php }  $rowCount++; ?>
    <div class="col-sm-<?=$bootstrapCol?>">
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



</div>

<?php
if($rowCount % 4 !=0){
    echo "</div>";
}
?>


<?php

$fav->closeCursor();


?>


<?php $content = ob_get_clean(); ?>

<?php require('TemplateLoggedIn.php'); ?>

