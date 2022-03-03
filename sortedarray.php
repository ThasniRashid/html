<html>
<body>
<?php
$age=array("peter"=>35,"ben"=>37,"joe"=>43);
arsort($age);
foreach($age as $x=>$_value)
{
	echo "keys=".$x.",value=".$_value;
	echo "<br>";
}
krsort($age);
foreach($age as $y=>$y_value)
{
	echo "key=".$y.",value".$y_value;
	echo "<br>";
}
?>
</body>
</html>
