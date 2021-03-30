{extends file = "main.tpl"}

{block name=header} {$page_header}<p><a class="btn btn-action btn-lg" href = "{$conf->app_url}" role="button">Powrót</a></p> {/block}

{block name=footer} {$page_footer} {/block}

{block name=content}
    <div style="width:90%; margin: 4em; min-height: 427px">
        <p>Przykładowa strona</p>
   </div>   
{/block}