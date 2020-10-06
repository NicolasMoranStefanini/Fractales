    {include 'header.tpl'}

    <main class="container"> <!-- inicio del contenido pricipal -->

        
        <ul class='list-group mt-5'>
            {foreach from=$items item=item}
            <li class='list-group-item d-flex justify-content-between'>
                <a href='watch/{$item->id}' class='info'>
                    <strong>{$item->brand}</strong> {$item->name} 
                </a>

               <!-- <div class='actions'>
                    <a class='btn btn-success btn-sm' href="ver/{$item->id}">VER</a>
                    <a class='btn btn-info btn-sm' href="finalizar/{$item->id}">FINALIZAR</a>
                    <a class='btn btn-danger btn-sm' href="eliminar/{$item->id}">ELIMINAR</a>
                </div> --->
            </li>
            {/foreach}
        </ul>

    </main>

    {include file='footer.tpl'}
