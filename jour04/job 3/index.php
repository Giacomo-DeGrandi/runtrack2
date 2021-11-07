<html>
<body>

<form action="#" method="post">
Name: <input type="text" name="name"><br>
Lastname: <input type="text" name="lastname"><br>
Age: <input type="text" name="age"><br>
State: <input type="text" name="state"><br>
<input type="submit">
</form>
<?php 

$x=0;

foreach($_POST as $z){
        $x++;
    }

echo $x;

?>

</body>
</html> 
