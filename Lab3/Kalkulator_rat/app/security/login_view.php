<!doctype html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>Kalkulator rat</title>
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css" />
    </head>
    
    <body>
        <div style = "width:90%; margin: 2em auto;">
            <form action="<?php print(_APP_ROOT);?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
                <legend>Kalkulator rat</legend>
                <fieldset>
                    <label for = "login">Login:</label>
                    <input id = "login" type = "text" name = "login" />
                    <label for = "pass">Password:</label>
                    <input id = "pass" type = "password" name = "pass" />
                </fieldset>
                <input type = "submit" value = "Zaloguj" class="pure-button pure-button-primary"/>          
            </form>
            
            <?php
                if(isset($messages)){
                    if(count($messages) > 0){
                        echo '<ol style = "margin-top: 2em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #C81910; width: 30em;">';
                        foreach($messages as $msg){ 
                            echo '<li>'.$msg.'</li>';                           
                        }
                        echo '</ol>';
                    }
                }
            ?>
        </div>
    </body>
</html>

