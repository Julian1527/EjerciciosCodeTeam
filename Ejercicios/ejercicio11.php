<?php 
if($_POST){

    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    //Suma

    $suma=$valorA+$valorB;

    //Resta
    $resta=$valorA-$valorB;

    //Division
    $division=$valorA/$valorB;

    //Multiplicacion
    $multiplicacion=$valorA*$valorB;
    
    echo "<font color='white'>".$suma."</font>"; 
    echo "<br/>"."<font color='white'>".$resta."</font>";
    echo "<br/>"."<font color='white'>".$division."</font>";
    echo "<br/>"."<font color='white'>".$multiplicacion."</font>";

    if($valorA==$valorB){

        echo "<br/>"."<font color='white'>"."El valor de A es igual que el valor de B" ."</font>" ; 
    }else{
        echo"<br/>"."<font color='white'>"."El valor de A es diferente al de B"."</font>";
    }
        if($valorA==4)  {
            echo"<br/>"."<font color='white'>". "El valor es 4"."</font>";
        }
        if($valorA==5) {
            echo "<br/>"."<font color='white'>". "El valor es 5"."</font>";
        }
        
    
    if ( ($valorA==$valorB)||($valorA==4)){

        echo "<br/>"."<font color='white'>". "El valor A es igual al valor B o es un numero 4"."</font>"."</br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body style="background-color:rgb(0,3,195);">
    <form action="ejercicio11.php" method="post">
    <B> 
    <FONT COLOR="white">Valor A:  </FONT>
   <input type="text"FONT COLOR="red" name="valorA" id=""style="background-color:rgb(193, 27, 127);color:rgb(255, 255, 255);border-color:rgb(213, 227, 20);">
   <br/>
   <FONT COLOR="white">Valor B:  </FONT>
    <input type="text" name="valorB" id="" style="background-color:rgb(193, 27, 127);color:rgb(255, 255, 255);border-color:rgb(213, 227, 20);">
    <br>
    <br/>
    <input type="submit" value="Calcular" style="background-color:rgb(193, 27, 127);color:rgb(255, 255, 255);border-color:rgb(213, 227, 20);">
    </form>
</body>
</html>