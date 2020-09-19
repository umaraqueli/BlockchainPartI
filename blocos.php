<?php
$array = array("Chase", "Rennie", "Franklin", "Huynh","Franklin", "Huynh", "England", "Lugo", "Rodrigues", "Betts", "Cummings", "Irwin", "Nixon", "Higgins", "Cook", "Ross", "Eaton", "Fountain");
$hashAnterior="Vazio";
for ($i = 0; $i < 10; $i++) {
    $origem =$array[$i];
    $destino =$array[$i+1];
    
    if (($i+1)==10) {
      $destino =$array[0];
    };
    $texto = "Origem: ".$origem."\n"."Destino: ".$destino."\n"."Mensagem: Ola ".$destino.". Meu nome é ".$origem."."."\n";
    $hashatual =hash('sha256', $texto);
    $texto = $texto."Hash: ".$hashatual."\nHash Anterior: ".$hashAnterior;  

    $arquivo = "result_".$i.".txt";
    if (file_exists ($arquivo)) {
    unlink($arquivo);
    }

    $fp = fopen($arquivo, "a+");
    fwrite($fp, $texto);
    fclose($fp);
    $hashAnterior=$hashatual;
}


