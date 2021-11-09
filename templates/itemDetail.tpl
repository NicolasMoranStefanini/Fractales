    {include 'header.tpl'}

    <main class="container w-50 bg-t"> <!-- inicio del contenido pricipal -->
          <div class="row">
            <div class="col w-25">
              <img style="width: 200px;" src="{$item->image}">
            </div>  
            <div class="col w-75">
              <h1>{$item->brand}</h1>
              <h3>{$item->name}</h3>
              <p>{$item->details}</p> 
            </div>
          </div> 
    </main>

    {include file='footer.tpl'}