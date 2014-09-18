<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
            <input type="text" name="produkt">
            <input type="submit" name="knapp" value="Submit">
        </form>
        <?php
        $get =$_GET["produkt"];
//var_dump($_GET);
        
        $minArray = array();
        
        $_COOKIE["minne"];
        $minArray = unserialize($_COOKIE["minne"]);
        array_push($minArray, $get);
        $minstring = serialize($minArray);
        setcookie("minne", $minstring, time()+3600);
        var_dump($minArray);
//        setcookie("minne","",time()+-3590);
//        echo $minstring;
        
        ?>
    </body>
</html>
