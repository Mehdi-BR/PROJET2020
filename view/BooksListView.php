<?php $title = 'Books List'; ?>

<?php ob_start(); ?>


<div class="container">
    <div class="row mt-4 mb-4">
        <div class="col"><h1>la liste des livres:</h1></div>
        <?php
        if($_SESSION['admin']==1){
        ?>
        <div class="col text-right"><a class="btn btn-outline-secondary" id="button" href="index.php?action=addbook"
                                       role="button">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                    <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                    <path fill-rule="evenodd"
                          d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                </svg>
                Ajouter Livre</a></div>
    </div>
    <?php  }
    ?>


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
