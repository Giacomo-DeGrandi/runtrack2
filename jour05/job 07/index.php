<html>
<form action="" method="post">
	<input type="text" value='text' name='str'>
  <label for="fonction"> _mode:</label>
  <select name="fonction[]"> <!--trick-->
    <option value="gras">Gras</option>
    <option value="cesar">Cesar</option>
    <option value="plateforme">Plateforme</option>
  </select>
  <br><br>
  <input type="submit" value="submit">
</form>


<?php



function gras($str){
	$caps=['A','B','C','D','E','F','G','H','I','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','V','U','W','X','Y','Z'];
	for($c=0; $c<=isset($str[$c]); $c++){ 
		if($str[$c] == ' '){
			echo '</b>'.' ';
		} else {
			for($i=0; $i<=isset($caps[$i]); $i++){
				if($str[$c]==($caps[$i]) ){
					echo '<b>';
				}
			}
			echo $str[$c];
		}
	}
}
			
function cesar($str){
	$alpha=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
		for($d=0; $d<=isset($str[$d]); $d++){
				for($m=0; $m<=isset($alpha[$m]); $m++){
					if($str[$d] == $alpha[$m]){
						$m=$m+2;
						echo $alpha[$m];
					}
				}
		}
}

function plateforme($str){
	$me=['me']; 
			for($z=0; $z<=isset($me[$z]); $z++){
				for($r=0; $r<=isset($str[$r]); $r++){
					if($str[$r] == $me[$z]){
						if($str[$r]=='e'){
							$str[$r]=='e_';
							echo $str[$r];  
						}
					}
				}
			}
}

$str=0;

$str=$_POST['str'];

if(isset($_POST['str'])){ 
		if(isset($_POST['fonction'])){
			foreach($_POST['fonction'] as $option){
				if($option == 'gras'){
					$_POST['str']==$str;
					gras($str);
				}
				if($option == 'cesar'){
					$_POST['str']==$str;
					cesar($str);
				}
				if($option == 'plateforme'){
					$_POST['str']==$str;
					plateforme($str);
				}
			}
		}
}


/*Créez un formulaire qui contient un input nommé “str” de type text, une liste
déroulante (select) nommée “fonction” et un bouton submit. Lorsque vous
validez le formulaire, vous devez appliquer des transformations à “str” en
fonction de l’option choisie dans la liste déroulante. Les choix possibles
sont :
- “gras” : une fonction qui prend en paramètre “str”. Elle écrit “str” en
mettant en gras (<b>) les mots commençant par une lettre majuscule.
- “cesar” : une fonction qui prend en paramètre “str” et un nombre
“decalage” (qui vaut 2 par défaut). La chaine est affichée en décalant
chaque caractère d’un nombre égal à “decalage”.
ex : si decalage vaut 1, e devient f. Si décalage vaut 3, z devient c.
- “plateforme”, une fonction qui prend en paramètre “str”. Elle écrit “str”
en ajoutant un “_” aux mots finissant par “me”.*/


?>