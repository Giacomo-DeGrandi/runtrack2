<?php
setcookie('nbvisites',time() + 1);

/*
Créez un cookie nommée “nbvisites”. A chaque fois que la page est visitée,
ajoutez 1. Afficher le contenu du cookie.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.
*/

?>

<html>
<body>
	<form action="#" method="post">=>
		<input type="submit" value="reset" name="reset">
	</form>
<?php

if(isset( $_COOKIE['nbvisites'] ) ) {
	$_COOKIE['nbvisites']==$cookies;
	$cookies++;
	echo 'Votre ID de session est le ' .$cookies;}

if(isset($_GET['reset'])){
	$_COOKIE['nbvisites']==false;
}

?>

</body>
</html>