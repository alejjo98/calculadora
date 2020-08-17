<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
</head>
<body> para sumar ingrese los valores en s1 y s2 -- para restar ingrese los valores en r1 y r2 --
para multiplicar ingrese los valores en m1 y m2 -- para dividir ingrese los valores en d1 y d2


    <?php
    $s1=$_REQUEST["s1"];
    $s2=$_REQUEST["s2"];
    $suma=$s1+$s2;      
    if($suma>0){ 
        $signosuma="https://cdn.elpopular.mx/notas/secciones/mundo/2019/09/19/a-37-anos-del-emoticon-que-todos-conocemos-la-carita-feliz/f45bf32aa0624c5abc10ef13b3689bb8_desk_1_750x554.jpg";
    }
    else{ 
        $signosuma="https://i.pinimg.com/originals/76/51/98/765198f916cbd9431c47998313c4d2ff.jpg";
       }
    $r1=$_REQUEST["r1"];
    $r2=$_REQUEST["r2"];
    $resta=$r1-$r2;
    if($resta>0){
        $signoresta="https://cdn.elpopular.mx/notas/secciones/mundo/2019/09/19/a-37-anos-del-emoticon-que-todos-conocemos-la-carita-feliz/f45bf32aa0624c5abc10ef13b3689bb8_desk_1_750x554.jpg";
    }
    else{
        $signoresta="https://i.pinimg.com/originals/76/51/98/765198f916cbd9431c47998313c4d2ff.jpg";
    }

    $m1=$_REQUEST["m1"];
    $m2=$_REQUEST["m2"];
    $multiplicacion=$m1*$m2;
    if($multiplicacion>0){
        $signomultiplicacion="https://cdn.elpopular.mx/notas/secciones/mundo/2019/09/19/a-37-anos-del-emoticon-que-todos-conocemos-la-carita-feliz/f45bf32aa0624c5abc10ef13b3689bb8_desk_1_750x554.jpg";
    }
    else{
        $signomultiplicacion="https://i.pinimg.com/originals/76/51/98/765198f916cbd9431c47998313c4d2ff.jpg";
    }

    $d1=$_REQUEST["d1"];
    $d2=$_REQUEST["d2"];
    $division= $d1/$d2;
    if($division>0){
        $signodivision="https://cdn.elpopular.mx/notas/secciones/mundo/2019/09/19/a-37-anos-del-emoticon-que-todos-conocemos-la-carita-feliz/f45bf32aa0624c5abc10ef13b3689bb8_desk_1_750x554.jpg";
    }
    else{
        $signodivision="https://i.pinimg.com/originals/76/51/98/765198f916cbd9431c47998313c4d2ff.jpg";
    }


    ?>
    <div>
    la suma es igual <b><?php echo $suma?> </b>
    <img src="<?php echo $signosuma?>" width="80" height="80">

    </div>
    <div>
    la resta es igual <b><?php echo $resta ?></b>
    <img src="<?php echo $signoresta?>" width="80" height="80">
    </div>
    <div>
    la multiplicacion es igual <b><?php echo $multiplicacion?></b>
    <img src="<?php echo $signomultiplicacion?>" width="80" height="80">
    </div>
    <div>
    la division es igual <b><?php echo $division ?></b>
    <img src="<?php echo $signodivision?>" width="80" height="80">
    </div>
</body>
</html>