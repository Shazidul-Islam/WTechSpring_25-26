<?php
echo"First Massage<br>";//<br> for line break
echo"Final term php language testing<br>";
/*to display we need to write echo 
and <?php ?> start and ending tag*/

//varisable = a resueable container that holds data string, integer, float, boolean
//string
$name = "Shazidul Islam";
$ID = "23-53120-3";
$food="burger";
echo"My Name is {$name}<br>";
echo"My id is {$ID} <br>";

//integer  
$age=23;
$quantity=5;
echo"I am {$age} years old <br>";

//float
$cgpa=3.85;
$money= 50.25;
$price=5.5;
echo"My CGPA is {$cgpa}<br>";
echo"I have only \${$money} <br>"; // if i like to add dollar sign before the money in output display i should use a backslash or it will give me error 

//boolean either true or false
$student = true;
$school = false;
echo"Student Status: {$student}<br>";
echo"Institution Status: {$school} cause i am a varsity student <br>";

//using arithmetic operators (mulltiplication)
$total=null;
echo"I have ordered {$quantity} large {$food} <br>";
$total=$quantity * $price;
echo"My Total bill is \${$total} <br>";


//lesson 3=> Arithmetic Operation (+  - * / ** %)
$x=10;
$y=3;
$z=null;
$p=null;
$z=$x+$y; // for sum;
$z=$x-$y; //for sub
$z=$x*$y; //for mull
$p=$x**$y;// for power
$z=$x/$y;// for div
$z=$x%$y; // for percent
echo"{$p}<br>";
echo"{$z}";
// for increment ($increment++ / $increment+=2) decrement ($decrement-- / $decrement-=2)
//operator precedence ()>**>* / %>>+ -
?>

<!DOCTYPE html>
<html>
    <body>
        <br>
        <Button>Done</Button> <!---we can write html code in php --->
    </body>
</html
