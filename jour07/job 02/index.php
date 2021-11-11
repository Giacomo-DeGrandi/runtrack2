<?php

setcookie('nbvisites');

?>
<html>
<body>
	<form action="#" method="get">=>
		<input type="submit" value="reset" name="reset">
	</form>
<?php

$biscuits = 0;

if(isset( $_COOKIE['nbvisites'] ) ) {
	$biscuits = $_COOKIE['nbvisites'];
	$biscuits++;
}

setcookie('nbvisites',$biscuits);

echo 'Votre ID de session est le '.$biscuits;


if(isset($_GET['reset'])){
		$biscuits=0;
		setcookie('nbvisites',$biscuits);
		$cookies=$_COOKIE['nbvisites'];
		header('Location: index.php');
	}

?>

</body>
</html>