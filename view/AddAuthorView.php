<?php
$title = htmlspecialchars('Add Author')?>

<?php ob_start(); ?>



<?php
$data=$Max->fetch();

$id=intval($data['AuthorID'])+1;

?>
<div class="container">
    <div class="text-center"><h1>Ajouter un Auteur:</h1></div>
    <form action="index.php?action=uploadAuthor&amp;id=<?=$id?>" method="post" enctype="multipart/form-data">
        <div class="form-group">

            Nom complet d'auteur:

            <input type="text" class="form-control" name="NameAuthor" required>

        </div>
        <div class="form-group">
            Description d'auteur:
            <textarea class="form-control" name="DiscAuthor"  rows="3"required></textarea>
        </div>
        <div class="form-group">
            choisis une image pour cet auteur :
            <input type="file" name="image" id="cover<?=$id?>"required>
        </div>



        <div class="form-group text-right">
            <button class="btn btn-primary" type="submit" value="submit" name="submit">Ajouter</button>
        </div>

    </form>
</div>

<?php $Max->closeCursor();?>
<?php $content = ob_get_clean(); ?>


<?php require('TemplateLoggedIn.php'); ?>