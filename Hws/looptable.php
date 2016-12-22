<?php
echo "<table><tr><th>Title</th><th>Price</th><th>Number</th></tr>";
foreach($shop as $v){
    echo "<tr>";
    foreach($v as $vv){
        echo "<td>{$vv}</td>";
    }
    echo "<tr>";
}
echo "</table>";
?>