<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<meta charset="utf-8">
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>CRUD PARA TESTES</h3>

<div>
	<form action="/admin/users/create" method="post">      

    <label for="login">login</label>
    <input type="text" id="none" name="nome" placeholder="Seu nome...">

    <label for="senha">senha</label>
    <input type="text" id="senha" name="idade" placeholder="Sua idade...">

    <input type="submit" value="Cadastrar">

  </form>

</div>

</body>
</html>
