{extends file = "main.tpl"}

{include file='header.tpl'}

{block name=footer} {$page_footer} {/block}

{block name=content}
    <div style="width:90%; margin: 4em; min-height: 427px">               
        <p><a href="{$conf->action_root}calcCompute"><input class="btn btn-action btn-md" type = "submit" value = "Powrót" class="pure-button pure-button-primary"/> </a></p>
       
        
        <form action="{$conf->action_root}calcList" method="post" class="pure-form pure-form-stacked">
            <legend></legend>
            <fieldset>
                <p> <label for = "kredyt">Kwota kredytu: </label> <input id = "kredyt" type = "text" name = "kredyt" value="{$form->kredyt}" /> </p>
            </fieldset>
            <input class="btn btn-default btn-lg" type = "submit" value = "Filtruj" class="pure-button pure-button-primary"/>            
        </form> 
              
        {include file='messages.tpl'}
        
        <br/><br/>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Kwota</th>
                    <th>Lata</th>
                    <th>Oprocentowanie</th>
                    <th>Miesięczna rata</th>
                    {if inRole('admin')}
                        <th>Operacja</th>
                    {/if}
                </tr>
            </thead>
            <tbody>
                {foreach $records as $r}
                    {strip}
                        <tr>
                            <td>{$r["credit_id"]}</td>
                            <td>{$r["amount"]} zł</td>
                            <td>{$r["years"]}</td>
                            <td>{$r["interest"]}%</td>
                            <td>{$r["monthly_rate"]} zł</td>
                            {if inRole('admin')}
                                <td>
                                    <a class="button primary small fit" href="{$conf->action_url}calcDelete&id={$r['credit_id']}">Usuń</a>     
                                </td>
                            {/if}
                        </tr>
                    {/strip}
                {/foreach}
            </tbody>
        </table>
    </div>          
                    
{/block}