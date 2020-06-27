<?php
$title = htmlspecialchars('Add event')?>

<?php ob_start(); ?>



<?php
$data=$Max->fetch();

$id=intval($data['eventID'])+1;
?>
    <div class="text-center"><h1>Ajouter un Evenement:</h1></div>
    <form action="index.php?action=uploadEvent&amp;id=<?=$id?>" method="post" enctype="multipart/form-data">
        <div class="form-group">

            Evenement:

            <input type="text" class="form-control" name="event" required>

        </div>
        <div class="form-group">
            Description d'evenement:
            <textarea class="form-control" name="eventDescription"  rows="3"required></textarea>
        </div>

        <div class="form-group">
            Date d'evenement:
            <input type="date" class="form-control" name="eventDate"  required>
        </div>
        <div class="form-group">
            Select cover for the book :
            <input type="file" name="image" required>
        </div>



        <div class="form-group text-right">
            <button class="btn btn-primary" type="submit" value="submit" name="submit">Ajouter</button>
        </div>

    </form>


<?php $Max->closeCursor();?>
<?php $content = ob_get_clean(); ?>


<?php require('TemplateLoggedIn.php'); ?>