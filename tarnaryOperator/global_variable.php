<?php 
// $string = "Bangladesh is a Beautiful Country";
// function text($B){
//     echo "WelCome $B";
// }

// text($string);

// $a = 20;
// $b = 60;

// function sum($d, $e){
//     echo $d + $e;
// }
// sum($a, $b)

// function greet($greeting, $name){
//     echo "$greeting $name";
// }

// greet('Allah Help You No upset All Always With You', "Md Masum Hossin");

// function getNumber(){
//     $output = [10, 20, 30,40];
//     return $output;
// }
// list($a, $b, $c, $d) = getNumber();
// echo $a. "-".$b . "-". $c. "-". $d;
// $mathMarks = [
//     "Khayrul Alam Rayan" => 90,
//     "Ikbal" => 80,
//     "Alluddhin" => 70,
//     "Sakib" => 90,
//     "Sadid" => 60,
//     "sohel" => 50,
// ];

// function gradeCalculate($math){
//     if($math>=90){
//         return "A";
//         }
//         elseif($math>=80){
//         return "B";
//         }
//         elseif($math>=70){
//             return "C";
//         }
//         elseif($math>=60){
//             return "D";
//         }
//         else{
//             return "Fail";
//         }
// }

// $RayanMath = $mathMarks['Khayrul Alam Rayan'];
// $RayanResult = gradeCalculate($RayanMath );
// echo $RayanResult."</br>";
// $SadidMath = $mathMarks['Sadid'];
// $SadidResult = gradeCalculate($SadidMath );
// echo $SadidResult."</br>";

// $sohelMath = $mathMarks['sohel'];
// $sohelResult = gradeCalculate($sohelMath);
// echo $sohelResult;

// Function With Default Value;
// function sum($a, $b, $c = 0, $d = 200){
//     $sum1 = $a;
//     $sum2 = $b;
//     $sum3 = $c;
//     $num4 = $d;
//     echo ($sum1 + $sum2 - $sum3 + $num4)."<br/>";
// };
// sum(200, 300);
// sum(5, 8);
// sum(10, 6);
// sum(2, 8);




// function type hinting 

// function sum(int $a, int $b, $c = 0, string $d = "200"){
//         $sum1 = $a;
//         $sum2 = $b;
//         $sum3 = $c;
//         $num4 = $d;
//         echo ($sum1 + $sum2 - $sum3 + $num4)."<br/>";
//     };
//     sum(200, 300);


// function mySelf(string $name, string|int $age, string $country){
//  echo "My Name is = $name and  Age= $age with my Country = $country";
// }
// mySelf("Md Mashum Hossin", 30, "Bangladesh");

// declare(strict_types =1); // ae ti declare krle type validation hoy;
// function person(? string $name){
//     echo "MY Name is $name";
// };
// person("India is a Biggest Country");
// person(null);




// Variadic Functioin
function sum(...$number){
    echo $number[0];
};
sum(10,20,30,40,50,60,70);

?>