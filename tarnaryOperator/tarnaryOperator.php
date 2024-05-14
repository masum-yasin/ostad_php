<?php 

$age = 20;
$msg = "";
$result = $age>=18 ? ($msg = "You are Adult") : ($msg = "You are Chile");
echo $result. '<br>';

//nested tarnary system

$score = 20;
$grade=($score>=99) ? ("A+") :(($score>=80) ? ("A") : (($score>=70) ? ("B") :(($score>=60) ? ("C") :(($score>=50) ? ("D") :(("F")
)
)
)
    )
);


echo ("Your are Result: $grade")."<br>";



$num = 40;
$num2 = 60;
$num3 = 120;
$largest = ($num>=$num2 && $num>=$num3) ? ("40 is a largest Number") : (($num2>=$num && $num2>=$num3) ? ("largest Number is 60") :(($num3>=$num && $num3>=$num2) ? ("120 is largest Number") : "NO Number Have" ));
echo $largest;


?>
