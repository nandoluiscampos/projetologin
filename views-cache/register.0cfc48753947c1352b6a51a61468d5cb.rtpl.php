<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login - Ouro Center</title>
      <link rel="stylesheet" href="/res/css/cssregistrar.css">
      <link rel="website icon" href="imagens/ourocenter-logo.png">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Ouro Center
         </div>
         <form action="registrar.html" method="POST">
            <div class="field">
               <input type="text" name="nome" required>
               <label>Nome</label>
            </div>
            <div class="field">
                <input type="text" name="telefone" required>
                <label>telefone</label>
             </div>
             <div class="field">
                <input type="text" name="email" required>
                <label>E-mail</label>
             </div>
            <div class="field">
               <input type="password" name="senha" required>
               <label>Senha</label>
            </div>
            <div class="field">
               <input type="submit" name="submit" value="Cadastrar">
            </div>
            <div class="signup-link">
                Voltar ao Site? <a href="index.php">Voltar</a>
             </div>
         </form>
      </div>
   </body>
</html>