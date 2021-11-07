<html>
<body>

<form action="#" method="post">
Username: <input type="text" name="name"><br>
Password: <input type="text" name="password"><br>
<input type="submit">
</form>

<?php 

$name = 'John';
$password = 'Rambo';

if (isset($_POST['name'])){
    if ($_POST['name'] == $name && $_POST['password'] == $password){
        echo 'C\'est pas ma guerre';
    } else { echo 'Votre pire cauchemar';}

}

?>

</body>
</html> 