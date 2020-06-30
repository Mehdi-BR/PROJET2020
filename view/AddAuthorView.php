<?php
$title = htmlspecialchars('Add Author')?>

<?php ob_start(); ?>



<?php
$data=$Max->fetch();

$id=intval($data['AuthorID'])+1;
var_dump($id);
?>
    <div class="text-center"><h1>Ajouter un Auteur:</h1></div>
    <form action="index.php?action=uploadAuthor&amp;id=<?=$id?>" method="post" enctype="multipart/form-data">
        <div class="form-group">

            Author Name:

            <input type="text" class="form-control" name="NameAuthor" required>

        </div>
        <div class="form-group">
            Author description:
            <textarea class="form-control" name="DiscAuthor"  rows="3"required></textarea>
        </div>
        <div class="form-group">
            Select cover for the book :
            <input type="file" name="image" id="cover<?=$id?>"required>
        </div>



        <div class="form-group text-right">
            <button class="btn btn-primary" type="submit" value="submit" name="submit">Ajouter</button>
        </div>

    </form>


<?php $Max->closeCursor();?>
<?php $content = ob_get_clean(); ?>


<?php require('TemplateLoggedIn.php'); ?>