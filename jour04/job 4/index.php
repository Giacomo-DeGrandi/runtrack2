<html>
<body>

<form action="#" method="post">
Name: <input type="text" name="name"><br>
Lastname: <input type="text" name="lastname"><br>
Age: <input type="text" name="age"><br>
State: <input type="text" name="state"><br>
<input type="submit">
</form>
    <table>
        <tr>
            <th>Argument</th>
            <th>Valeur</th>
        </tr>

<?php 

$z=0;


foreach($_POST as $k => $z){
    if($z !=''){
        echo "<tr><td>".$k."</td>" ;
        echo "<td>".$z."</td></tr>" ;
    $z++;}
}


?>

    </table>
</body>
</html> 