<h2>利息試算程式</h2>
<hr>
<?php
	$money= 500000;
	$rate =0.024;
    $years=15;
    echo"<table border=1 width=300>";
    
    echo"<tr>";
    echo"<td bgcolor=red>本金</td><td>".$money."元</td>";
    echo"</tr>";

    echo"<tr>";
    echo"<td>利率</td><td>".$rate*100 ."%</td>";
    echo"</tr>";

    echo"<tr>";
    echo"<td>期數</td><td>".$years."年</td>";
    echo"</tr>";

    $s_amount=$money*(1+$rate* $years);
    $c_amount=$money*(1+$rate) **$years;
    
    echo"<tr>";
    echo"<td>單利試算結果:</td><td>".(int)$s_amount."元</td>";
    echo"</tr>";
    
    echo"<tr>";
    echo"<td>單利試算結果:</td><td>".(int)$c_amount."元</td>";
    echo"</tr>";
    echo"<table>"

?>