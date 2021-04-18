{block name=header} 
    {$page_header}
    <h4>
        Zalogowano jako: <span style="color: #FF9B22">{$user->login}</span>. 
        Rola użytkownika: <span style="color: #FF9B22">{$user->role}</span>.
    </h4> 
    <p><a class="btn btn-action btn-lg" href = "{$conf->action_url}logout" role="button">Wyloguj</a></p> 
{/block}
