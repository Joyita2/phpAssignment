<?php
echo "<h2>Leap year</h2>";

$year = 2019;

if($year%4==0){
echo "leap year";
}
else{
	echo "not leap year";
}

 ?>

<?php
 echo "<h2>Salary</h2>";

 $salary= 25000;
 $hra =0;
 $da =0;

 if($salary<=10000){
  
 echo"House Rent = ". $salary * 20/100;

 echo " and ";

 echo "DA = ". $salary * 80/100;

 $hra = $salary * 20/100;

 $da =  $salary * 80/100;

 $result =  $salary+$hra+
 $da;

 echo " and gross salary =  ";

 echo  $result;

 }

 if($salary> 10000 && $salary<20000){
  
 echo"House Rent = ". $salary * 25/100;

 echo " and ";

 echo "DA = ". $salary * 90/100;

 $hra = $salary * 25/100;

 $da =  $salary * 90/100;

 $result =  $salary+$hra+
 $da;

 echo " and gross salary =  ";

 echo  $result;


 }

 if($salary> 20000){
  
 echo"House Rent = ". $salary * 30/100;

 echo " and ";

 echo "DA = ". $salary * 95/100;

 $hra = $salary * 30/100;

 $da =  $salary * 95/100;

 $result =  $salary+$hra+
 $da;

 echo " and gross salary =  ";

 echo  $result;

echo "<br></br>";

 }
 ?>


 <?php 
 echo "<h2> Alphabet, Digit & Special Character</h2>";

 
$text = "115";

	if ($text >= "a" && $text <= "z") {
		echo "It's a Small Letter Alphabet";
	}
	else if ($text >= "A" && $text <= "Z") {
		echo "It's a Capital Letter Alphabet";
	}
	else if ($text >= 0 && $text<=9) {
		echo "It's a Positive Digit";
	}
	else if ($text <= 0) {
		echo "It's Negative Digit";
	}
	else if ($text >= 0 && $text>9) {
		echo "It's a Positive Number";
	}

	else {
		echo "It's Special Character";
	}


 ?>