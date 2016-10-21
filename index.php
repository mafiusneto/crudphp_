<?php
    //require_once 'conexao.inc.php';
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>CRUD Cliente</title>
    </head>
    <body>
        <header>
            <h2>Gerenciamento de Clientes</h2>
            <hr>
            <h3>Menu</h3>
            <a href="?pg=incluir">Cadastrar</a><br>
            <a href="?pg=listar">Listar</a><br>                
        </header>
        <hr>
<?php
        if(isset($_GET['pg'])){            
            $pg = $_GET['pg'];
            include_once "$pg.php";
        }
?>        
    </body>
</html>
