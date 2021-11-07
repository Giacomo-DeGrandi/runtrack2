<html>
<body>

<form action="#" method="get">
Name: <input type="text" name="name[name]"><br>
Lastname: <input type="text" name="lastname[lastname]"><br>
Age: <input type="text" name="age[age]"><br>
State: <input type="text" name="state[state]"><br>
<input type="submit">
</form>
    <table>
        <tr>
            <th>Argument</th>
            <th>Valeur</th>
        </tr>

<?php 

$z=0;


foreach($_GET as $k => $z){
        echo "<tr><td>".$k."</td>" ;
        echo "<td>".$z."</td></tr>" ;
    $z++;
}


?>

    </table>
</body>
</html> 
