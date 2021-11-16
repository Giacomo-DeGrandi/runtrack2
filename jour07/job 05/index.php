<?php

/*Développez le fameux jeu du morpion. Faites un tableau html avec 3 lignes
et 3 colonnes représentant la grille. Au début de la partie, chacune des
cases contient un bouton de type submit dont la valeur est “-”. Si un joueur
clique sur ce bouton, le bouton est remplacé par un “O” ou par un “X”. C’est
le joueur “X” qui commence.
Dès qu’un joueur a gagné, affichez “X a gagné” ou “O a gagné” et
réinitialisez la partie. Si toutes les cases ont été cliquées et que personne
n’a gagné, affichez “Match nul” et réinitialisez la partie. Un bouton
“réinitialiser la partie” présent en dessous de la grille permet également de
réinitialiser la partie à tout moment.*/


setcookie($squares,)

?>

<html>
<head>
    <style>

        body {
            background-color: whitesmoke;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;

        }
        .tris{
            padding: 10px;
            font-size: 18px;
            text-align: center;
            background-color: lightgrey;
            border-radius: 10px;
            color: white;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
        .signs{ 
            font-size: 72px;
            color: white;
            font-family: Verdana, sans-serif;
        }
        .tris td{
            width: 100px;
            height: 50px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
        .subm {
            border: none;
            background-color: lightgrey;
            font-size: 72px;
            font-family: Verdana, sans-serif;
        }

    </style>
</head>
<body>
	<table class="tris">
                <?php 


                /*


                <?php


setcookie('cookie[uno]', '-');
setcookie('cookie[due]', '-');
setcookie('cookie[tre]', '-');
setcookie('cookie[quattro]', '-');
setcookie('cookie[cinque]', '-');
setcookie('cookie[sei]', '-');
setcookie('cookie[sette]', '-');
setcookie('cookie[otto]', '-');
setcookie('cookie[nove]', '-');

?>

<html>
    <form action='#' method='post'>
        <input type='submit' name='squares[$uno]' value='-'>  
        <input type='submit' name='squares[$due]' value='+'>
        <input type='submit' name='squares[$tre]' value='o'>
    <br>
        <input type='submit' name='squares[$quattro]' value='-'> 
        <input type='submit' name='squares[$cinque]' value='-'>
        <input type='submit' name='squares[$sei]' value='-'>
    <br>
        <input type='submit' name='squares[$sette]' value='-'>
        <input type='submit' name='squares[$otto]' value='-'>
        <input type='submit' name='squares[$nove]' value='-'>
    </form>
</html>

<?php

echo $_COOKIE['cookie']['uno'];
echo $_POST['squares']['$due'];
     
foreach ($_POST['squares'] as $k => $v){
        if ($v == '-'){
            echo 'bene';
        }

if (isset($_POST['squares'])){
     }
}

?>
            */

                function mytd($squares){
                    if(!isset($_POST['value'])) {
                        $td1='<td class="tris"><form action="#" method="post"><input type="submit" value="-" name="value" class="subm"></td>';
                        echo $td1; 
                    } elseif ($_POST['value']=='X') {
                        $td2='<td class="tris"><form action="#" method="post"><input type="submit" value="O" name="value" class="subm"></td>';
                        echo $td2; 
                    } else {
                        $td3='<td class="tris"><form action="#" method="post"><input type="submit" value="X" name="value" class="subm"></td>';
                        echo $td3; 
                    }
                }  

                mytd($postvaluetd);   
                

                ?>

    </table>

<?php


/*

<?php

// Définit mes cookies
setcookie("squares[one]", $_POST['squares']);
setcookie("squares[two]", $_POST['squares']);
setcookie("squares[three]", $_POST['squares']);

// Après le rechargemet de la page, nous les affichons
if (isset($_COOKIE['cookie'])) {
    foreach ($_COOKIE['cookie'] as $name => $value) {
        $value = $_POST['squares']        
        echo "$name : $value <br />\n";
    }
}
?>

*/



?>

</body>
</html>
