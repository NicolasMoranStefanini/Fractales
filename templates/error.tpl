{if isset($smarty.session.EMAIL_USER) && $smarty.session.ADMIN == '1'}
        {include 'headerAdmin.tpl'}
        {else}
        {include 'header.tpl'}
{/if}
<div class="bg-t text-light w-50 px-4 py-4 m-auto">
        <h1> ERROR!</h1>
        <h2> {$msg} </h2>
</div>
    
{include 'footer.tpl'}
