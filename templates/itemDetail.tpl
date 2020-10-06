    {include 'header.tpl'}

    <main class="container"> <!-- inicio del contenido pricipal -->

        <h1>{$item->brand}</h1>
        <h3>{$item->name}
        <p> Description: {$item->details}</p>  
     

    </main>

    {include file='footer.tpl'}