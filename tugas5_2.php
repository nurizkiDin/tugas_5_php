<?php
$input1_1 = "Ayo";
$input1_2 = "Bersama";
$input2_1 = "Belajar";
$input2_2 = "Niomic";
$ws = " ";

echo "<h1>Operator String</h1>";
echo "<table border='1'>";
echo "<tr>";
echo "<th>Input 1</th>";
echo "<th>Input 2</th>";
echo "<th>Hasil</th>";
echo "</tr>";
echo "<tr>";
echo "<td>$input1_1</td>";
echo "<td>$input2_1</td>";
echo "<td>$input1_1".$ws."$input2_1</td>";
echo "</tr>";
echo "<tr>";
echo "<td>$input1_2</td>";
echo "<td>$input2_2</td>";
echo "<td>$input1_2".$ws."$input2_2</td>";
echo "</tr>";
echo "</table>";
echo "<br/>Gabungan : ".$input1_1.$ws.$input2_1.$ws.$input1_2.$ws.$input2_2." :)";
?>