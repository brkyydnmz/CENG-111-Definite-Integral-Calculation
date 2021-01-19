<!DOCTYPE HTML>  
<html>
<h1>Definite Integral Calculation </h1>
<head>
<style>

</style>
</head>
<body>
<form action="111.php" method="POST">
  f(x)=<input type="number" name="x"width >
 +<input type="number" name="x1" >x
  +<input type="number" name="x2" >x²
  +<input type="number" name="x3" >x³

 +<input type="number" name="expx" >exp(x)
  +<input type="number" name="cosx" >cos(x)
  <br> </br>
a= <input type="number" name="a" > 
b=<input type="number" name="b" >
	<br> <br>
<input type="submit" value="Submit"><br>  
</form>

b <br>
<span style='font-size:50px;'> &#8747;  f(x)dx= 
<?php
if ($_POST){
	$x=$_POST["x"];
	$x1=$_POST["x1"];
	$x2=$_POST["x2"];
	$x3=$_POST["x3"];
	$e=$_POST["expx"];
	$s=$_POST["cosx"];
	$a=$_POST["a"];
	$b=$_POST["b"];
    	if (!$x){$x=0;}
	if (!$x1){$x1=0;}
	if (!$x2){$x2=0;}
	if (!$x3){$x3=0;}
	if (!$e){$e=0;}
	if (!$s){$s=0;}
	if (!$a or !$b ){
		if (!$a and $b ){echo  "Values a cannot be empty";}
		elseif($a and !$b ) {echo  "Values b cannot be empty";}
		else{echo  "Values a and b cannot be empty";}
							}
	else{
	$result1=$x*$b+$x1*$b*$b/2+$x2*$b*$b*$b/3+$x3*$b*$b*$b*$b/4+$e*exp($b )+$s*sin($b);
	$result2=$x*$a+$x1*$a*$a/2+$x2*$a*$a*$a/3+$x3*$a*$a*$a*$a/4+$e*exp($a )+$s*sin($a);

	echo  $result1-$result2;}
}

 
?>

</span>
<br> a





</body>
</html>