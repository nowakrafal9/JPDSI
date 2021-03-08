<html>
<head> <title>PepoSad</title> </head>
<body>

<?php
	for($a = -1; $a > -4; $a--)
		for($b = 0; $b > -4; $b--)
			for($c = 0; $c > -4; $c--){
				licz_mz($a,$b,$c);
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