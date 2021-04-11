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
            
        {include file='messages.tpl'}
    </div>
{/block}