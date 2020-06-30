
</div>
<!-- /#page-content-wrapper -->
<?php
$user=getData();
$ext= ImageExists('img/userProfile/user'.$_SESSION['id']);
if(!$ext){
    $img='profiledefault.png';

}else{
    $img='user'.$_SESSION['id'].$ext;
}
?>
<div class="bg-dark" id="sidebar-wrapper">
    <!--<div class="sidebar-heading"></div>-->
    <div class="list-group list-group-flush bg-light">

        <div class="list-group-item list-group-item-action container d-flex justify-content-center bg-dark text-center" id="prof" >

                           <img src='img/userProfile/<?=$img?>'  class='img-thumbnail bg-dark' id='profile' >";




        </div>
        <div class="list-group-item list-group-item-action d-flex justify-content-center bg-dark" id="nav"><h6 class="text-white"> <?php echo $user['prenom']." ".$user['nom']; ?></h6></div>
        <a href="index.php?action=ProfileInfo" class="list-group-item list-group-item-action d-flex justify-content-center bg-dark" id="nav"><h6 class="text-white">Mon profile</h6></a>
        <a href="index.php?action=listFavorites" class="list-group-item list-group-item-action d-flex justify-content-center bg-dark" id="nav"><h6 class="text-white">Ma bibliothéque</h6></a>
        <a href="index.php?action=logout" class="list-group-item list-group-item-action d-flex justify-content-center bg-dark" id="nav"><h6 class="text-white">Se déconecter</h6></a>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</body>
</html>
