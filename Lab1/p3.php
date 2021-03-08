<html>
<head> <title>PepoSad</title> </head>
<body>

<?php
	for($i = 0; $i < 5; $i++){
		$a = rand(1,10);
		$b = rand(1,10);
		
		print($a . " + " . $b . " = " . $a+$b . "<br>");
		print($a . " - " . $b . " = " . $a-$b . "<br>");
		print($a . " * " . $b . " = " . $a*$b . "<br>");
		print($a . " / " . $b . " = " . $a/$b . "<br>");
		print($a . "<sup>" . $b . "</sup> = " . pow($a,$b) . "<br>");
		print("<br>");
	}
?>
</body>
</html>