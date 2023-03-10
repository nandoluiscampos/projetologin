<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login - Ouro Center</title>
      <link rel="stylesheet" href="/res/css/csslogin.css">
      <link rel="website icon" href="imagens/ourocenter-logo.png">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Ouro Center / Login
         </div>
         <form action="/1234admin/login" method="POST">
            <div class="field">
               <input type="email" name="email" required>
               <label>E-mail</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Senha</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Salvar login</label>
               </div>
               <div class="pass-link">
                  <a href="#">Esqueceu a senha?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" name="submit" value="Login">
            </div>
            <div class="signup-link">
               Não é membro? <a href="registrar.html">Cadastre-se</a>
            </div>
            <div class="signup-link">
               Voltar ao Site? <a href="/">Voltar</a>
            </div>
         </form>
         </div>
   </div>
   </body>
