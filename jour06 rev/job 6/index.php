<html>
<form action="" method="post">
	  <label for="style"> _style:</label>
	  <select name="style[]"> <!--trick-->
		    <option value="style1">Dark</option>
		    <option value="style2">Moka</option>
		    <option value="style3">Saber</option>
	  </select>
  <br><br>
  <input type="submit" value="submit" name="submit">
</form>

<?php

if(isset($_POST['submit'])){ 
				foreach ($_POST['style'] as $key => $value) {
					if($value == "style1"){
						echo '<link rel="stylesheet" href="css/dark.css">';	
					}
					if($value == "style2"){
						echo '<link rel="stylesheet" href="css/moka.css">';	
					}
					if($value == "style3"){
						echo '<link rel="stylesheet" href="css/saber.css">';	
					}
				}		
}

?>


</html>

