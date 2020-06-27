<?php
  
  $uid = $_SESSION['id'];
  include_once 'db/db.php';
  
 
?>
</div>
<!-- /#page-content-wrapper -->
<div class="bg-dark" id="sidebar-wrapper">
    <!--<div class="sidebar-heading"></div>-->
    <div class="list-group list-group-flush bg-light">

        <div class="list-group-item list-group-item-action container d-flex justify-content-center bg-dark" >

            <a href="#"><?php

                

                $sql = "SELECT * FROM membres WHERE id='$uid' ";
                $result = mysqli_query($conn,$sql);

                if (mysqli_num_rows($result) > 0) {
                  while ($row=mysqli_fetch_assoc($result)) {
                    $sqlimg = "SELECT * FROM profileimg WHERE membreid='$uid'";
                    $resultimg = mysqli_query($conn, $sqlimg);
                    while ($rowimg=mysqli_fetch_assoc($resultimg)) {
                      $_SESSION['stat']=$rowimg['stat'];
                      if ($rowimg['stat'] == 0) {
                        echo "<img src='img/profile".$uid.".jpg?'".mt_rand()." img class='img-thumbnail bg-dark' id='profile' >";

                      } else {
                        echo "<img src='img/profiledefault.png' img class='img-thumbnail bg-dark' id='profile' >";
                      }
                      
                    }$_SESSION['nom']=$n = $row['nom'];
                     $_SESSION['prenom']=$p = $row['prenom'];
                     $_SESSION['admin']=$row['admin'];
                    
                  }
                  
                }

                ?>
            <h6 class="text-white"> <?php echo $n." ".$p; ?></h6> 
             </a>
        </div>

        <a href="profileEdit.php" class="list-group-item list-group-item-action d-flex justify-content-center bg-dark" id="nav"><h6 class="text-white">Mon profile</h6></a>
        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-center bg-dark" id="nav"><h6 class="text-white">Ma bibliothéque</h6></a>
        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-center bg-dark" id="nav"><h6 class="text-white">Se déconecter</h6></a>
    </div>

</div>
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
</body>

</html>