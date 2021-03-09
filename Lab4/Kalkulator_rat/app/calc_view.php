<?php
    require_once dirname(__FILE__).'/../config.php';

    include _ROOT_PATH.'/templates/top.php';
?>
    
    <div style="width:90%; margin: 4em; min-height: 427px">
        <form action="<?php print(_APP_ROOT);?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
            <legend>Kalkulator rat</legend>
            <fieldset>
                <p> <label for = "kredyt">Kwota kredytu: </label> <input id = "kredyt" type = "text" name = "kredyt" value="<?php out($formCalc['kredyt'])?>" /> </p>
                <p> <label for = "il_lat">Ilość lat:</label> <input id = "il_lat" type = "text" name = "il_lat" value="<?php out($formCalc['lata'])?>" /> </p>
                <p> <label for = "oprocentowanie">Oprocentowanie</label>
                    <select name = "oprocentowanie">
                        <option value = "0" <?php if(isset($formCalc['procent']) && $formCalc['procent'] == "0") { print('selected'); }?> > 0% </option>
                        <option value = "2" <?php if(isset($formCalc['procent']) && $formCalc['procent'] == "2") { print('selected'); }?> > 2% </option>
                        <option value = "4" <?php if(isset($formCalc['procent']) && $formCalc['procent'] == "4") { print('selected'); }?> > 4% </option>
                        <option value = "6" <?php if(isset($formCalc['procent']) && $formCalc['procent'] == "6") { print('selected'); }?> > 6% </option>
                        <option value = "8" <?php if(isset($formCalc['procent']) && $formCalc['procent'] == "8") { print('selected'); }?> > 8% </option>
                    </select>
                </p>
            </fieldset>
            <input class="btn btn-default btn-lg" type = "submit" value = "Oblicz" class="pure-button pure-button-primary"/>          
        </form>
         
        <?php
            if(isset($messages)){
                if (count ( $messages ) > 0){
                    echo '<ol style = "margin: 2em auto; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #C81910; width: 30em;">';
                    foreach($messages as $msg){ 
                        echo '<li>'.$msg.'</li>';                           
                    }
                    echo '</ol>';
                }
            }
        ?>
            
        <?php if(isset($msc_kwota)) { ?>
        <div style="margin: 1em auto; padding: 1em; border-radius: 0.5em; background-color: #079100; width:20em;">
        <?php echo "Miesięczna rata wynosi: ".$msc_kwota; ?>
        </div>
        <?php } ?>

   </div>  
<?php 
    include _ROOT_PATH.'/templates/bottom.php';
?>

