<?php
if($_POST){

    $boton= $_POST['btnValor'];

    switch($boton){

        case 1:
                echo "El usuario presionó el boton 1";
        break;

        case 2:
                echo "El usuario presionó el boton 2";
        break;

        case 3:
                echo "El usuario presionó el boton 3";
        break;
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <form action="ejercicio13.php" method="post">

    <input type="submit" name="btnValor" value="1" style="background-color:rgb(239, 247, 11);color:rgb(0s, 0, 0);border-color:rgb(213, 227, 20);">
    <br/>
    <input type="submit" name="btnValor" value="2" style="background-color:rgb(4, 37, 181);color:rgb(255, 255, 255);border-color:rgb(10, 27, 98);">
    <br/>
    <input type="submit" name="btnValor" value="3" style="background-color:rgb(193, 27, 27);color:rgb(255, 255, 255);border-color:rgb(116, 18, 18);">
    
    </form> 

</body>
</html>