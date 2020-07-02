<?php $title='statistiques';?>
<?php ob_start();?>

<?php
$au = $ausers->fetch();
$mu = $musers->fetch(); 
$fu = $fusers->fetch();
$ab = $abooks->fetch();
$i=0;




echo 'total users :'.$au['COUNT(*)'].'<br>';

echo 'male users :'.$mu['COUNT(*)'].'<br>';

echo 'female users :'.$fu['COUNT(*)'].'<br>';

echo 'total books :'.$ab['COUNT(*)'].'<br>';

while($g = $gen->fetch()){

	echo '<br>'.$g['genre'].' livres :'; print_r ($bookbyg[$i]['COUNT(*)']);
	$i++;
	
}
?>
<?php $content=ob_get_clean();?>
<?php require('TemplateLoggedIn.php');