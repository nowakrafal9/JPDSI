{if $messages->hasErrors()}
    <ol style = "margin: 2em auto; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #C81910; width: 30em;">
    {foreach  $messages->getErrors() as $err}
        {strip} <li>{$err}</li> {/strip}
    {/foreach}
    </ol>
{/if}
