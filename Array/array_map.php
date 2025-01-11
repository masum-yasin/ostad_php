<?php
//  anythihg working done with method
// $array = [10,20,30,40,50,60];


// function multiply($number){
// return $number  * 2;
// }
// $result = array_map( 'multiply', $array);
// print_r($result);

$array2 = [10,20,30,40,50,60];
$result = [];
for($i = 0; $i < count($array2); $i++){
  $result[] = $array2[$i] * 2;
   
}
print_r($result);

?>