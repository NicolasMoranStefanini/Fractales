{if isset($smarty.session.EMAIL_USER) && $smarty.session.ADMIN == '1'}
    {include 'headerAdmin.tpl'}
    {else}
    {include 'header.tpl'}
  {/if}
    <main class="container"> <!-- inicio del contenido pricipal -->

        <h1>{$item->brand}</h1>
        <h3>{$item->name}</h3>
        <p>{$item->details}</p>  
     

    </main>

    {include file='footer.tpl'}