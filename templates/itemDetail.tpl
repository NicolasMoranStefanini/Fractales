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
    <aside class="container bg-white"> <!-- inicio comentarios -->
      {if isset($smarty.session.EMAIL_USER)}
        {if $smarty.session.ADMIN == '1'}
          <div class='comments'></div>
          <{include 'newComment.tpl'}
          {else}
          <div class='comments'></div>
          {include 'newComment.tpl'}
        {/if}
        {else}
          <div class='comments'></div>
          <h6>Only users can comment this item.</h6>
          <p class="m-2">Already a user? <a href="login"> Log In </a> or <a href="register">Create account</a>.</p>

      {/if}
    </aside>
    <script src="{BASE_URL}js/comments.js"></script>
    {include file='footer.tpl'}