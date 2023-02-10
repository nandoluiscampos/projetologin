<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/res/css/css.css">
    <link rel="stylesheet" href="/res/css/dropdown.css">
    <title>Site Oficial- Ouro Center</title>
</head>
<body>
    <nav>
        <div class="container">
            <a class="li" href="index.php"><img class="logomarca" src="imagens/ourocenter-logo.png" alt="logomarca" height="50" width="200"></a>
            <div class="search-bar">
                <i class="uil uil-search"></i>
                <input type="search" placeholder="Pesquisar">
            </div>
            <div class="button">
                <a href="/login">Login</a>
                <a href="registrar.html">Registre</a>    
                <a href="formulariocontato.php"><button class="btn">Cadastre sua Loja</button></a>
                <a href=""></a>
            </div>
                <div class="panel">                    
                    <!-- <p>Bem-vindo:</p>
                    <div class="dropdown">
                        <button class="dropbtn">Meus dados</button>
                        <div class="dropdown-content">
                            <a href="meusdados.html">Meus dados</a>
                            <a href="trocarsenha.html">Trocar senha</a>
                            <a href="logout.php">Sair</a>
                        </div>
                    </div> -->
        </nav>  
    <header>
        <div class="title">
         <img src="imagens/capa.jpg" alt="capa">
        </div>

        <div class="titulo">
            <h1>Ouro Center</h1>
            <h2>Shopping Online</h2>
        </div>
    </header>
    <br><br>
    <main>   
        <div class="sub-titulo">
        <h1>Encontre sua loja</h1>
        <!-- <h2><?php echo formatDate($results["0"]["dtregister"]); ?></h2> -->
        </div>
    <div class="lojas">
        <div class="cards">
            <img src="imagens/juninhogames.jpeg"  alt="lojaJuninho" height="150" width="150">
            <h3>Juninho Games</h3>
            <a class="botao" href="juninhoGames.php">Acessar</a>
        </div>
        <div class="cards">
            <img src="imagens/exclusiva.png"  alt="loja" height="150" width="150">
            <h3>Exlusiva Boutique</h3>
            <a class="botao" href="loja2.html">Acessar</a>
        </div>
        <div class="cards">
            <img src="imagens/exclusiva.png"  alt="loja" height="150" width="150">
            <h3>Exlusiva Boutique</h3>
            <a class="botao" href="loja2.html">Acessar</a>
        </div>
        <div class="cards">
            <img src="imagens/exclusiva.png"  alt="loja" height="150" width="150">
            <h3>Exlusiva Boutique</h3>
            <a class="botao"  href="loja2.html">Acessar</a>
        </div>
        <div class="cards">
            <img src="imagens/exclusiva.png"  alt="loja" height="150" width="150">
            <h3>Exlusiva Boutique</h3>
            <a class="botao" href="loja2.html">Acessar</a>
        </div>
        <div class="cards">
            <img src="imagens/exclusiva.png" alt="loja" height="150" width="150">
            <h3>Exlusiva Boutique</h3>
            <a class="botao" href="loja2.html">Acessar</a>
        </div>
    </div> 
    <br>
    <div class="lojas2">
        <div class="cards2">
            <img src="imagens/exclusiva.png"  alt="loja2" height="150" width="150">
            <h3>Exlusiva Boutique</h3>
            <a class="botao" href="loja2.html">Acessar</a>
        </div>
        <div class="cards2">
            <img src="imagens/exclusiva.png"  alt="loja2" height="150" width="150">
            <h3>Exlusiva Boutique</h3>
            <a class="botao" href="loja2.html">Acessar</a>
        </div>
        <div class="cards2">
            <img src="imagens/exclusiva.png" alt="loja2" height="150" width="150">
            <h3>Exlusiva Boutique</h3>
            <a class="botao" href="loja2.html">Acessar</a>
        </div>
        <div class="cards2">
            <img src="imagens/exclusiva.png" alt="loja2" height="150" width="150">
            <h3>Exlusiva Boutique</h3>
            <a class="botao" href="loja2.html">Acessar</a>
        </div>
        <div class="cards2">
            <img src="imagens/exclusiva.png" alt="loja2" height="150" width="150">
            <h3>Exlusiva Boutique</h3>
            <a class="botao" href="loja2.html">Acessar</a>
        </div>
        <div class="cards2">
            <img src="imagens/exclusiva.png" alt="loja2" height="150" width="150">
            <h3>Exlusiva Boutique</h3>
            <a class="botao" href="loja2.html">Acessar</a>
        </div>
    </div> 
    <br><br>
        <div class="tit" >
            <h1>Ouro Center Shopping</h1>     
        </div>
        <div class="tit-img">
            <img src="imagens/ourocenter-logo.png" alt="barra" wight="150" height="150">    
        </div>
        <br>
        <div class="tit-text">
            <p>
                Para agradar a toda família e os mais variados estilos, 
                o Ouro Center Shopping conta com as melhores tendências, 
                um dos maiores centros de lojas de Ouro Fino e região. 
            </p>
        </div>
    </main>
    <br><br>
</body>

</html>
