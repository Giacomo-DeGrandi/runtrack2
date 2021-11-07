<html>
<body>

<form action="#" method="get">
NOMBRE: <input type="text" name="number"><br>
<input type="submit">
</form>

<?php 


if (isset($_GET['number'])){
    if ($_GET['number'] % 2 == 0){
        echo 'Nombre pair';
    } else { echo 'Nombre impair';}

}

?>

</body>
</html> 