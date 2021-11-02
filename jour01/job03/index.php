
<!DOCTYPE html>
<html>
    <head>
        <title>php vars</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 

$stringy = "chaine de caracteres";
$inty = 4;
$floaty = 1.5;
$booly = false;
$varinull = null;

// gettype () Retourne le type de la variable value. Pour vérifier le type de la variable, vous pouvez utiliser les fonctions is_*. "boolean""integer""double" (pour des raisons historiques, "double" est retournée lorsqu'une valeur de type float est fournie, et non "float"")"string""array""object" "resource""resource (closed)" à partir de PHP 7.2.0"NULL""unknown type"

?>
    </head>
    <header>
    </header>
    <body>
        <table>
            <thead>
                <th>type</th>
                <th>nom</th>
                <th>valeur</th>
            </thead>
            <tr>
                <td><?php echo $stringy ?> </td>

                <td><?php echo gettype($stringy) ?> </td>

               	<td>$name = "gidi"</td>
            </tr>            
            <tr>
                <td><?php echo $inty ?></td>

                <td><?php echo gettype($inty) ?></td>

               	<td>$inty = 4</td>
            </tr>
            <tr>
                <td><?php echo $floaty ?></td>

                <td><?php echo gettype($floaty) ?></td>

               	<td>$floaty = 1.5</td>
            </tr>
            <tr>
                <td><?php echo $booly ?></td> <!-- ne vais pas apparaitre -->

                <td><?php echo gettype($booly) ?></td>

               	<td>$booly = false</td>
            </tr>
            <tr>
                <td><?php echo $varinull ?></td>

                <td><?php echo gettype($varinull) ?></td>

               	<td>$varinull = null</td>
            </tr>
        </table>
     </body>
    </html>
