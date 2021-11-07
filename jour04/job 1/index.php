<html>
<body>

<form action="#" method="get">
Name: <input type="text" name="name[name]"><br>
Lastname: <input type="text" name="name[lastname]"><br>
Age: <input type="text" name="name[age]"><br>
State: <input type="text" name="name[state]"><br>
<input type="submit">
</form>
<?php 

$x=0;

foreach ($_GET['name'] as $z) {
        $x++;
}

echo $x;

/* deuxieme methode, mieux que le premier

$x = 0;

foreach($_GET as [$z]){
    if($z !=''){
        $x++;
    }
}
echo $x;

*/


?>

</body>
</html> 
