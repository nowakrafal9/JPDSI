<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset = "utf-8" />
		<title>Kalkulator rat</title>
	</head>
	<body>
		
		<form action = "<?php print(_APP_URL); ?>/app/kalk.php" method = "post">
			Wartość kredytu: <input type = "text" name = "kredyt" size = "5" <?php if(isset($kredyt)) print('value = "'.$kredyt.'"'); ?> /> <br/><br/>
			Ilość lat kredytu: <input type ="text" name = "il_lat" size= "1" <?php if(isset($lata)) print('value = "'.$lata.'"'); ?>/> <br/><br/>
			Oprocentowanie: <select name = "oprocentowanie">
				<option value = "0" <?php if(isset($procent) && $procent == "0") print('selected'); ?> > 0% </option>
				<option value = "2" <?php if(isset($procent) && $procent == "2") print('selected'); ?> > 2% </option>
				<option value = "4" <?php if(isset($procent) && $procent == "4") print('selected'); ?> > 4% </option>
				<option value = "6" <?php if(isset($procent) && $procent == "6") print('selected'); ?> > 6% </option>
				<option value = "8" <?php if(isset($procent) && $procent == "8") print('selected'); ?> > 8% </option>
			</select> <br/><br/>
			<input type = "submit" value = "Oblicz" />
		</form>
		
		<?php
			if(isset($messages)){
				echo '<ol style = "margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5x; background-color: #f88; width: 300px;">';
				foreach($messages as $msg)
					echo '<li>'.$msg.'</li>';
				echo '</ol>';
			}
		?>
		
		<?php if(isset($msc_kwota)) { ?>
		<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
		<?php echo "Miesięczna rata wynosi: ".$msc_kwota; ?>
		</div>
		<?php } ?>
		
	</body>
</html>