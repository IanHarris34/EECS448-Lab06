<?php 
$a0 = "2";
$a1 = "4";
$a2 = "8";
$a3 = "Mitochondria";
$a4 = "16";

$i0 = $_POST["q0"];
$i1 = $_POST["q1"];
$i2 = $_POST["q2"];
$i3 = $_POST["q3"];
$i4 = $_POST["q4"];


echo "Question 1 What is 1+1? <br>";
echo "&nbsp;&nbsp;&nbsp;Your answer: " . $i0 . "<br>";
echo "&nbsp;&nbsp;&nbsp;Correct answer: " . $a0 . "<br><br>";

echo "Question 2 What is 2+2? <br>";
echo "&nbsp;&nbsp;&nbsp;Your answer: " . $i1 . "<br>";
echo "&nbsp;&nbsp;&nbsp;Correct answer: " . $a1 . "<br><br>";

echo "Question 3 What is 4+4? <br>";
echo "&nbsp;&nbsp;&nbsp;Your answer: " . $i2 . "<br>";
echo "&nbsp;&nbsp;&nbsp;Correct answer: " . $a2 . "<br><br>";

echo "Question 4 What is the powerhouse of the cell? <br>";
echo "&nbsp;&nbsp;&nbsp;Your answer: " . $i3 . "<br>";
echo "&nbsp;&nbsp;&nbsp;Correct answer: " . $a3 . "<br><br>";

echo "Question 5 What is 8+8? <br>";
echo "&nbsp;&nbsp;&nbsp;Your answer: " . $i4 . "<br>";
echo "&nbsp;&nbsp;&nbsp;Correct answer: " . $a4 . "<br><br>";

$totalCorrect = 0;
if ($a0 == $i0) { $totalCorrect++; }
if ($a1 == $i1) { $totalCorrect++; }
if ($a2 == $i2) { $totalCorrect++; }
if ($a3 == $i3) { $totalCorrect++; }
if ($a4 == $i4) { $totalCorrect++; }	
	
echo "Correct answers: " . $totalCorrect . ", which is a " . $totalCorrect*20 . "% score.";

?> 