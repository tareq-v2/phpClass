<?php
$x =isset($_POST['a'])?$_POST['a']:"";
$y =isset($_POST['b'])?$_POST['b']:"";
$z =isset($_POST['c'])?$_POST['c']:"";


if(isset($_REQUEST["add"]))
{
	$z=$x+$y;
	echo "Result: ".$z;
}

if(isset($_POST["sub"]))
{


	$z=$x-$y;
	echo "Result: ".$z;
}
if(isset($_POST["mul"]))
{


	$z=$x*$y;
	echo "Result: ".$z;
}





if(isset($_REQUEST["large2"]))
{
	if($x>$y)
	{
		echo "Large :".$x;
	}
	else
	{
		echo "Large :".$y;
	}

}


if(isset($_REQUEST["large3"]))
{
	if($x>$y && $x>$z)
	{
		echo "Large :".$x;
	}	

	else if($y>$x && $y>$z)
	{
		echo "Large :".$y;
	}	

	else if($z>$x && $z>$y)
	{
		echo "Large :".$z;
	}
	else
	{
		echo "Invlid Input";
	}
}


if(isset($_REQUEST["loop"]))
{

		for($i=$x; $i<=$y; $i=$i+1)
		{
			if($i%2==1)
			{
				echo "<br>$i";
			}
			

		}
		echo "exit loop";
}



?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>
<form method="POST"> 

	<input type="text" style="margin-bottom: 5px;" name="a" autocomplete="off"><br>
	<input type="text" name="b" autocomplete="off"><br><br>
	<input type="text" name="c" autocomplete="off"><br><br>

	<input type="submit" name="large" value="Add">
	<input type="submit" name="sub" value="Sub">
	<input type="submit" name="mul" value="Mul">
	<input type="submit" name="div" value="Div">
	<input type="submit" name="large2" value="large2">
	<input type="submit" name="large3" value="large3">
	<input type="submit" name="loop" value="loop">
</form>

</body>
</html>


