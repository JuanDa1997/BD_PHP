
<?php
    // definir variables
    $variable = 35;
    $nombre = "juan";
    //Imprimir
    // echo "Mi nombre es" . $nombre; 
// --------------------------------------------------------
    //tipo de variables
    $letra  =  "c";
    $numero =   4;
    $cadena =  "Todo bien todo correcto";
    $Verdadero   =   true;
    $arreglo  = array("carro","moto","avion");   
    $arreglo2 = array(12,6,78,25);
    $nulos    = null;
    // echo $letra ."<br>".$numero;
// -----------------------------------------------------------
    //Funciones para strings
    $mensaje = "The world is yours";
    // longitud
    // echo strlen($mensaje);
    //Numero de palabras
    // echo str_word_count($mensaje);
    // Reversa
    // echo strrev($mensaje);
    // Encontrar texto
    // echo strpos($mensaje, "yours");
    //Reemplazar texto
    // echo str_replace("yours", "mine", $mensaje);
    // Convertir a minusculas
    // echo strtolower($mensaje);
    //Convertit a mayuscula
    // echo strtoupper($mensaje);
    //Comparar cadenas-distancia en bytes
    // echo strcmp("juan","camila"); 
    //Substraer cadena
    // echo substr($mensaje, 10,4);
    //Remover espacios en blanco
    echo trim("     juan     es   de   cali");
?>