<?php
echo "<table border='3' cellpadding='10'  cellspacing='0'>";


echo "<tr><th>1</th>";
for ($i = 2; $i <= 10; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";


for ($i = 2; $i <= 10; $i++) {
    echo "<tr>";
    echo "<th>$i * 1 = $i</th>";
    for ($j = 2; $j <= 10; $j++) {
        echo "<td>" . (  $i * $j) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
<br>
<br>
<br>
<br>

<?php
 

  for($i=0;$i<10;$i++) {
    echo "0$i, ";
  }
  for($k=10;$k<100;$k++) {
    echo "$k, ";
  }
?>
