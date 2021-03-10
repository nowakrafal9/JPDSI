<!DOCTYPE html>
<html lang="pl">
    <head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
        <meta name="description" content="{$page_description|default:'Opis domyślny'}">

	<title>{$page_title|default:"Tytuł domyślny"}</title>
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="{$app_url}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{$app_url}/css/font-awesome.min.css">

	<link rel="stylesheet" href="{$app_url}/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="{$app_url}/css/main.css">
    </head>
    
    <body class="home">
	
	<header id="head">
		<div class="container">
			<div class="row">
                                {block name=header} Domyślna treść nagłówka .... {/block}
			</div>
		</div>
	</header>  
        <div class="container text-center">
            {block name=content} Domyślna treść zawartości .... {/block}
        </div>
        <footer id="footer" class="top-space">
        <div class="footer1">
            <div class ="container">
                {block name=footer} Domyślna treść stopki .... {/block}
            </div>
        </div> 
    </body>
</html>
