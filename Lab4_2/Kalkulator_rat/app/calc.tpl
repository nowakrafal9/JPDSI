{extends file = "../templates/main.tpl"}

{block name=header} {$page_header} <p><a class="btn btn-action btn-lg" href = "{$app_url}/app/security/logout.php" role="button">Wyloguj</a></p> {/block}
{block name=footer} {$page_footer} {/block}

{block name=content}
    <div style="width:90%; margin: 4em; min-height: 427px">
        <form action="{$app_url}/app/calc.php" method="post" class="pure-form pure-form-stacked">
            <legend>Kalkulator rat</legend>
            <fieldset>
                <p> <label for = "kredyt">Kwota kredytu: </label> <input id = "kredyt" type = "text" name = "kredyt" value="{$formCalc['kredyt']}" /> </p>
                <p> <label for = "il_lat">Ilość lat:</label> <input id = "il_lat" type = "text" name = "il_lat" value="{$formCalc['lata']}" /> </p>
                <p> <label for = "oprocentowanie">Oprocentowanie</label>
                    <select name = "oprocentowanie">
                        <option value = "0" {if isset($formCalc['procent']) and $formCalc['procent']==0} selected{/if}> 0% </option>
                        <option value = "2" {if isset($formCalc['procent']) and $formCalc['procent']==2} selected{/if}> 2% </option>
                        <option value = "4" {if isset($formCalc['procent']) and $formCalc['procent']==4} selected{/if}> 4% </option>
                        <option value = "6" {if isset($formCalc['procent']) and $formCalc['procent']==6} selected{/if}> 6% </option>
                        <option value = "8" {if isset($formCalc['procent']) and $formCalc['procent']==8} selected{/if}> 8% </option>
                    </select>
                </p>
            </fieldset>
            <input class="btn btn-default btn-lg" type = "submit" value = "Oblicz" class="pure-button pure-button-primary"/>          
        </form>
         
        {if isset($messages)}
            {if count($messages) > 0} 
		<ol style = "margin: 2em auto; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #C81910; width: 30em;">
		{foreach  $messages as $msg}
                    {strip} <li>{$msg}</li> {/strip}
		{/foreach}
		</ol>
            {/if}
        {/if}
          
        {if isset($msc_kwota)}
            <div style="margin: 1em auto; padding: 1em; border-radius: 0.5em; background-color: #079100; width:20em;">
            Miesięczna rata wynosi: {$msc_kwota}
            </div>
        {/if}
   </div>   
{/block}