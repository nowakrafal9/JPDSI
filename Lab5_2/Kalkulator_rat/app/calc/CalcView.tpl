{extends file = "../../templates/main.tpl"}

{block name=header} {$page_header}<p><a class="btn btn-action btn-lg" href = "{$conf->action_url}other_action" role="button">Inna strona</a></p> {/block}

{block name=footer} {$page_footer} {/block}

{block name=content}
    <div style="width:90%; margin: 4em; min-height: 427px">
        <form action="{$conf->action_root}compute" method="post" class="pure-form pure-form-stacked">
            <legend>Kalkulator rat</legend>
            <fieldset>
                <p> <label for = "kredyt">Kwota kredytu: </label> <input id = "kredyt" type = "text" name = "kredyt" value="{$form->kredyt}" /> </p>
                <p> <label for = "il_lat">Ilość lat:</label> <input id = "il_lat" type = "text" name = "il_lat" value="{$form->lata}" /> </p>
                <p> <label for = "oprocentowanie">Oprocentowanie</label>
                    <select name = "oprocentowanie">
                        <option value = "0" {if isset($form->procent) and $form->procent==0} selected {/if}> 0% </option>
                        <option value = "2" {if isset($form->procent) and $form->procent==2} selected {/if}> 2% </option>
                        <option value = "4" {if isset($form->procent) and $form->procent==4} selected {/if}> 4% </option>
                        <option value = "6" {if isset($form->procent) and $form->procent==6} selected {/if}> 6% </option>
                        <option value = "8" {if isset($form->procent) and $form->procent==8} selected {/if}> 8% </option>
                    </select>
                </p>
            </fieldset>
            <input class="btn btn-default btn-lg" type = "submit" value = "Oblicz" class="pure-button pure-button-primary"/>          
        </form>
         
        {if $messages->isError()}
		<ol style = "margin: 2em auto; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #C81910; width: 30em;">
		{foreach  $messages->getErrors() as $err}
                    {strip} <li>{$err}</li> {/strip}
		{/foreach}
		</ol>
        {/if}
          
        {if isset($result->msc_kwota)}
            <div style="margin: 1em auto; padding: 1em; border-radius: 0.5em; background-color: #079100; width:20em;">
            Miesięczna rata wynosi: {$result->msc_kwota}
            </div>
        {/if}
   </div>   
{/block}