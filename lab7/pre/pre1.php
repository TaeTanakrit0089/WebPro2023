<h1>PHP code part 1</h1>
<?php
$value = 10;
$myarr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
$power_value = $value * $value;
echo "Power of " . $value . " is " . $power_value;
?>
<h1>PHP code part 2</h1>
<?php
for ($i = 0; $i < $value; $i++) {
    echo $i . " x " . $value . " = " . $i * $value . "<br>";
}
?>
<h1>PHP code part 3</h1>
<?php
for ($i = 0; $i < sizeof($myarr); $i++) {
    echo $myarr[$i] . " x " . $value . " = " . $myarr[$i] * $value . "<br>";
}
/*  using foreach
foreach ($myarr as $value) {
    print ("$value <br>");
}
*/
?>