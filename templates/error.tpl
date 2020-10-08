{if isset($smarty.session.EMAIL_USER) && $smarty.session.ADMIN == '1'}
        {include 'headerAdmin.tpl'}
        {else}
        {include 'header.tpl'}
{/if}
        <h1> ERROR!</h1>
        <h2> {$msg} </h2>
    
    
{include 'footer.tpl'}
