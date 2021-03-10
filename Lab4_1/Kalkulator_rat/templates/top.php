<!DOCTYPE html>
<html lang="pl">
    <head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php out($page_description); if (!isset($page_description)) {  ?> Opis domyślny ... <?php } ?>">
	
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
				<?php echo $page_header?>
				<p><a class="btn btn-action btn-lg" href = "<?php print(_APP_ROOT);?>/app/security/logout.php" role="button">Wyloguj</a></p>
			</div>
		</div>
	</header>  
        <div class="container text-center">