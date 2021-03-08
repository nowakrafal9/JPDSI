<html>
<head> <title>p2</title> </head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<input type="text" name="a" size ="1"> x<sup>2</sup> + 
		<input type="text" name="b" size ="1"> x + 
		<input type="text" name="c" size ="1">
		
		
		<input type="submit" value="Oblicz">
	</form>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {	
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];
			
		if(empty($b)) $b = 0;
		if(empty($c)) $c = 0;
		
		if(!empty($a))
			licz_mz($a, $b, $c);
		else
			print("Nie można obliczyć pierwiastków kwadratowych gdy a=0");
	}
	
	function licz_mz($p1, $p2, $p3){	
		if($p1 == 1)
			print(" x<sup>2</sup>");
		else if($p1 == -1)
			print(" -x<sup>2</sup>");
		else
			print(" " . $p1 . "x<sup>2</sup>");
		
		if($p2 == 1)
			print("+x ");
		else if($p2 == -1)
			print("-x ");
		else if($p2 > 0)
			print("+" . $p2 . "x");		
		else if($p2 < 0)
			print($p2 . "x ");
			
		if($p3 > 0)
			print("+" . $p3);
		else if ($p3 < 0)
			print($p3);
			
		print("<br>");
		
		$delta = $p2*$p2 - 4*($p1*$p3);
		
		if($delta>0){
			$x1 = (-$p2+sqrt($delta))/(2*$p1);
			$x2 = (-$p2-sqrt($delta))/(2*$p1);
		
			print("<br> x<sub>1</sub>= " . $x1 . "<br> x<sub>2</sub>= " . $x2);
		}
		else if($delta==0){
			$x = (-$p2)/(2*$p1);
		
			print("<br> x= " . $x);
		}
		else{
			print("<br> Brak miejsc zerowych");
		}
		
		print("<br><br>");
	}
	
?>
</body>
</html>