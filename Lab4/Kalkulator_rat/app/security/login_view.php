<!DOCTYPE html>
<html lang="pl">
    <head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	
	
	<title><?php out($page_title); if (!isset($page_title)) {  ?> Tytuł domyślny ... <?php } ?></title>
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php print(_APP_ROOT);?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php print(_APP_ROOT);?>/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php print(_APP_ROOT);?>/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?php print(_APP_ROOT);?>/css/main.css">
    </head>
    
    <body class="home">
	
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">Kalkulator rat</h1>
				<p class="tagline">Szablony, łączenie HTML z różnych plików</p>
			</div>
		</div>
	</header>  
        <div class="container text-center">
            <div style = "width:90%; margin: 4em auto; min-height: 427px">
                <form action="<?php print(_APP_ROOT);?>/app/security/login.php" method="post" class="pure-form pure-form-stacked">
                    <legend>Zaloguj się aby użyć kalkulator</legend>
                    <fieldset>
                        <p> <label for = "login">Login:</label> <input id = "login" type = "text" name = "login" /> </p>
                        <p> <label for = "pass">Password:</label> <input id = "pass" type = "password" name = "pass" /> </p>
                    </fieldset>
                    <input class="btn btn-default btn-lg" type = "submit" value = "Zaloguj" class="pure-button pure-button-primary"/>          
                </form>
            
                <?php
                    if(isset($messages)){
                        if(count($messages) > 0){
                            echo '<ol style = "margin: 2em auto; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #C81910; width: 30em;">';
                            foreach($messages as $msg){ 
                               echo '<li>'.$msg.'</li>';                           
                            }
                            echo '</ol>';
                        }
                    }
                ?>
            </div>
        </div>
<?php
    include _ROOT_PATH.'/templates/bottom.php';
?>