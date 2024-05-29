 <?php
$txt = "Hello Ashmita";
$x = 5;
$y = 10;

echo "Tect using PHP = ",$txt;
echo "<br>";
echo "Value of X = ",$x;
echo "<br>";
echo "Value of Y = ",$y;
echo "<br>";
echo "result = X + Y = ",$x + $y;
echo "<br>";
echo "minimum value = ",(min(0, 150, 30, 20, -8, -200) . "<br>");
echo "maximum value = ",(max(0, 150, 30, 20, -8, -200). "<br>");
echo "square root of 64 = ",(sqrt(64) . "<br>");
echo "square root of 81 = ",(sqrt(81) . "<br>");
echo "square root of 144 = ",(sqrt(144) . "<br>");
echo "square root of 169 = ",(sqrt(169). "<br>");
echo(rand(10, 100)."<br>");
define("Display", "It is a ending");

function Test() {
  echo Display;
}
 
Test();
?>
