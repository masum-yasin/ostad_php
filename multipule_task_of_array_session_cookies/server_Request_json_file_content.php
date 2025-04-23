<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $plainText = file_get_contents("Php://input");
   $plainArray = json_decode($plainText, true);

//    print_r($plainArray);
 $sumPlainArray = $plainArray['num1'] + $plainArray['num2'];
 $mulPlainArray = $plainArray['num1'] * $plainArray['num2'];
 $subPlainArray = $plainArray['num1'] - $plainArray['num2'];
 $divPlainArray = $plainArray['num1'] / $plainArray['num2'];

 $AssocitiveArray = ["sumPlainArray" => $sumPlainArray, "mulPlainArray " =>$mulPlainArray, "subPlainArray" => $subPlainArray, "divPlainArray"=>$divPlainArray];

 $result = json_encode($AssocitiveArray);
 echo $result;
}


?>