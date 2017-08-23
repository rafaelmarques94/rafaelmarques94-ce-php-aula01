 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="UTF-8"/>
    <title>Document</title>
  </head>
<body>

<table border="1">
<tr>
<td>Operação</td>
<td>Resultado</td>
</tr>
<tr>
<td>A+B</td>
<td>
<?php

$A = 10;
$B = 20;
$result = $A + $B;
echo $result;
?>
</td>
</tr>

<tr>
<td>A-B</td>
<td>
<?php

$result = $A - $B; 
echo $result;
?>
</td>
</tr>

<tr>
<td>AXB</td>
<td>
<?php

$result = $A * $B; 
echo $result;
?>
</td>
</tr>

<tr>
<td>A/B</td>
<td>
<?php

$result = $A / $B; 
echo $result;
?>
</td>
</tr>

<tr>
<td>B <sup>A</sup></td>
<td>
<?php

$result = pow($B, $A); 
echo number_format($result, 0, ',', '.');
?>
</td>
</tr>


</table>
 </body>
  </html>