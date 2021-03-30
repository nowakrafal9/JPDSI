{extends file = "main.tpl"}

{block name=header} {$page_header} {/block}

{block name=footer} {$page_footer} {/block}

{block name=content}
    <div style = "width:90%; margin: 4em auto; min-height: 427px">
        <form action="{$conf->action_url}login" method="post" class="pure-form pure-form-stacked">
            <legend>Zaloguj się aby użyć kalkulator</legend>
            <fieldset>
                <p> <label for = "login">Login:</label> <input id = "login" type = "text" name = "login" /> </p>
                <p> <label for = "pass">Password:</label> <input id = "pass" type = "password" name = "pass" /> </p>
            </fieldset>
            <input class="btn btn-default btn-lg" type = "submit" value = "Zaloguj" class="pure-button pure-button-primary"/>          
        </form>    
            
        {if $messages->isError()}
		<ol style = "margin: 2em auto; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #C81910; width: 30em;">
		{foreach   $messages->getErrors() as $err}
                    {strip} <li>{$err}</li> {/strip}
		{/foreach}
		</ol>
        {/if}
    </div>
{/block}