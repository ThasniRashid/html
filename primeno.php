<html>
<body>
<form name="form" action="#" method="post">
	<label>Lower limit:</table>
	<input type="text" name="lower"/><br><br>
	<label>Upper limit: </label>
	<input type="text" name="upper"/>
	<button name="submit" type="submit">Submit</button>
</form>
<?php
$l=$_post['lower'];
$u=$_post['upper'];
$flag=0;
$count=0;
for($i=$l;$i<=$u;$i++)
{
	$flag=0;
	for($j=2;$j<=$i/2;$j+1)
	{
		$c=$i%$j;
		if($c==0)
		{
			$flag=1;
		}
	}
	if($flag==0 && $count==0)
	{
		echo "Prime numbers--<br>";
		$count=1;
	}
	if($flag==0)
		echo " $i ";
}
</body>
</html>
		