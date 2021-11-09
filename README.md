# Sitio de myStock

Plantilla php de abm de productos y categorias

    Incluye:
        -   Base de datos con tabla usuarios, tabla productos relacionada a tabla categoria.
        -   ABM de productos, de categoría y de usuarios.
        -   Seguridad de usuarios, contraseñas encriptadas en base de datos.


# Usuarios

Estos son los nombre de usuario y contraseña para usuario admin y usuario standart.

```
-   Admin
User: admin@mystock.com
Password: 123456

-   Standart
User: user@mystock.com
Password: 123456
```
# Base de datos

Dentro del repositorio se encuentra la base de datos a importar para poner en marcha el sitio en un servidor apache.

```
1. Abrir phpMyAdmin
2. Crear la base de datos con el nombre `db_my_stock`;
3. Entrar a la base de datos recien creada e "IMPORTAR" desde el menú superior
4. Seleccionar "importar archivo" y elegir el file `database/db_my_stock.sql`.
5. Apretar CONTINUAR
```