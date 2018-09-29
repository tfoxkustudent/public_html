
<?php

$answer1 = $_POST["group1"];
$answer2 = $_POST["group2"];
$answer3 = $_POST["group3"];
$answer4 = $_POST["group4"];
$answer5 = $_POST["group5"];
$points = 0;
$score = 0;

echo "<strong>";
echo "QUIZ RESULTS";
echo "</strong>";
echo "<br>";
echo "<br>";
echo "<strong>";
echo "Question 1: What year was KU founded?";
echo "</strong>";
echo "<br>";
echo "You answered: ";
echo $answer1;
echo "<br>";
echo "The correct answer is: 1865";
echo "<br>";
if ($answer1 == "1865")
{
  ++$points;
}
else
{
  echo "Wrong answer... no points for you";
  echo "<br>";
}

echo "<br>";
echo "<strong>";
echo "Question 2: How much was KU tutition per class the first year of classes?";
echo "</strong>";
echo "<br>";
echo "You answered: ";
echo $answer2;
echo "<br>";
echo "The correct answer is: 30";
echo "<br>";
if ($answer2 == "30")
{
  ++$points;
}
else
{
  echo "Wrong answer... no points for you";
  echo "<br>";
}

echo "<br>";
echo "<strong>";
echo "Question 3: How many faculty members did KU start with?";
echo "</strong>";
echo "<br>";
echo "You answered: ";
echo $answer3;
echo "<br>";
echo "The correct answer is: 3";
echo "<br>";
if ($answer3 == "3")
{
  ++$points;
}
else
{
  echo "Wrong answer... no points for you";
  echo "<br>";
}

echo "<br>";
echo "<strong>";
echo "Question 4:  What was a faculty member's salary when KU started?";
echo "</strong>";
echo "<br>";
echo "You answered: $";
echo $answer4;
echo "<br>";
echo "The correct answer is: $1600";
echo "<br>";
if ($answer4 == "1600")
{
  ++$points;
}
else
{
  echo "Wrong answer... no points for you";
  echo "<br>";
}

echo "<br>";
echo "<strong>";
echo "Question 5:  What year was KU's first commencement?";
echo "</strong>";
echo "<br>";
echo "You answered: ";
echo $answer5;
echo "<br>";
echo "The correct answer is: 1873";
echo "<br>";
if ($answer5 == "1873")
{
  ++$points;
}
else
{
  echo "Wrong answer... no points for you";
}
echo "<br>";
echo "<br>";

echo "Total Points: ";
echo "<strong>";
echo $points;
echo "</strong>";
echo "<br>";
echo "<br>";

$a = ($points/5);
$b = ($a * 100);
echo "Percentage Correct: ";
echo "<strong>";
echo $b;
echo "%";
echo "</strong>";

?>
