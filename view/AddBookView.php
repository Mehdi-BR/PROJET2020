<?php
$title = htmlspecialchars('Add Book')?>

<?php ob_start(); ?>



<?php
$data=$Max->fetch();

$id=intval($data['BookID'])+1;
?>
<div class="container">
    <div class="text-center"><h1>Ajouter un Livre:</h1></div>

<form action="index.php?action=uploadBook&amp;id=<?=$id ?>" method="post" enctype="multipart/form-data">
   <div class="form-group">

       Titre du livre:

    <input type="text" class="form-control" name="titleBook" required>
   </div>
    <div class="form-group">
        Description du livre:
        <textarea class="form-control" name="discBook"  rows="3" required></textarea>
<!--    <input type="text" name="discBook--><?//=intval($data['BookID'])+1; ?><!--">-->
    </div>
    <div class="form-group">
    choisis une illustration pour ce livre :
    <input type="file" name="image" id="cover<?=$id?>">
    </div>

    <div class="form-group">
        <label for="author">Auteur:</label>
        <select name="author" class="form-control" id="author" required>
            <option value="">---- -----</option>
            <?php

            while($auth=$Authors->fetch()) {
                ; ?>
                <option value="<?= $auth['AuthorID'] ?>" ><?= $auth['AuthorName'] ?></option>

                <?php
            }
            var_dump($auth);
           ?>
        </select>
        <label><a href="index.php?action=addAuthor">new author</a></label>
    </div>
    <div class="form-group">
        <label for="genreID">Genre:</label>
        <select name="genreID" class="form-control" id="genreID" required>
            <option value="">---- -----</option>
            <?php

            while($Genre=$genre->fetch()) {
                ; ?>
                <option value="<?= $Genre['genreID'] ?>" ><?= $Genre['genre'] ?></option>

                <?php

            }
            ?>
        </select>
    </div>

    <div class="form-group text-right">
        <button class="btn btn-primary" type="submit" value="submit" name="submit">Ajouter</button>
    </div>

</form>

</div>
<?php $Max->closeCursor();?>
<?php $content = ob_get_clean(); ?>


<?php require('TemplateLoggedIn.php'); ?>