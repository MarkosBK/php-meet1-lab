<?
$cols = 8;
$rows = 8;
echo "<table>";
 for ($i=1; $i < $cols+1; $i++) { 
    echo "<tr>";
    echo "<th style='background-color: gray; width: 40px; height: 40px;>$i</th>";
    for ($j=1; $j < $rows+1; $j++) { 
        if($i==1)
        echo "<th style='background-color: gray; width: 40px; height: 40px;'>$j</th>";
        else
        echo "<td style='background-color: lightgray; width: 40px; height: 40px;'>".$j*$i."</td>";
    }
    echo "</tr>";
}
echo"</table>";
?>