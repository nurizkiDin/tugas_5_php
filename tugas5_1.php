<?php
$t = true;
$f = false;

echo "<h1>Tabel Logika</h1>";
echo "<table border='1'>";
echo "<tr>";
echo "<th>Input 1</th>";
echo "<th>Input 2</th>";
echo "<th>AND</th>";
echo "<th>OR</th>";
echo "</tr>";
echo "<tr>";
echo "<td>false</td>";
echo "<td>false</td>";
echo "<td>".intval($f and $f)."</td>";
echo "<td>".intval($f or $f)."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>false</td>";
echo "<td>true</td>";
echo "<td>".intval($f and $t)."</td>";
echo "<td>".intval($f or $t)."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>true</td>";
echo "<td>false</td>";
echo "<td>".intval($t and $f)."</td>";
echo "<td>".intval($t or $f)."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>true</td>";
echo "<td>true</td>";
echo "<td>".intval($t and $t)."</td>";
echo "<td>".intval($t or $t)."</td>";
echo "</tr>";
echo "</table>";
?>