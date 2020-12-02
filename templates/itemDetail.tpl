{if isset($smarty.session.EMAIL_USER) && $smarty.session.ADMIN == '1'}
    {include 'headerAdmin.tpl'}
    {else}
    {include 'header.tpl'}
  {/if}
    <main class="container w-50 bg-t"> <!-- inicio del contenido pricipal -->
            <h1>{$item->brand}</h1>
            <h3>{$item->name}</h3>
            <p>{$item->details}</p>  
    </main>
    <aside class="container bg-t2 w-50"> <!-- inicio comentarios -->
      {if isset($smarty.session.EMAIL_USER)}
        {if $smarty.session.ADMIN == '1'}
          <div class='comments'>
            <ul id="comments-list" class='list-group w-100 m-auto'>
            </ul>
          </div>
          <h4>Make a review</h4>
          {include 'newComment.tpl'}
        {else}
          <div class='comments'>
            <ul id="comments-list" class='list-group w-100 m-auto'>
            </ul>
          </div>
          <h4>Make a review</h4>
          {include 'newComment.tpl'}
        {/if}
        {else}
          <div class='comments'>
            <ul id="comments-list" class='list-group w-100 m-auto'>
            </ul>
          </div>
          <h6>Only users can comment this item.</h6>
          <p class="m-2">Already a user? <a href="login"> Log In </a> or <a href="register">Create account</a>.</p>

      {/if}
    </aside>
    <script src="{BASE_URL}js/comments.js"></script>
    {include file='footer.tpl'}