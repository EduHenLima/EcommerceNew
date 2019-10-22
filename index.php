<?php 
// aqui fazemos o inicio do composer. 
// é obrigatorio ter esse inicio do autoload para ele puxar de todas as rotas
//inicio de sessão com session
// pagina totalmente feita para as rotas, para fazer nova rota só copiar o codigo
// e alterar o que fica dentro do get e q new "Page" que será feita

session_start();
require_once("vendor/autoload.php");

use	\Slim\Slim;

$app = new Slim();

// com esse comando debug veremos o framwork do slim aparecendo na tela com isso ficara mais facil de solucionar o erro.
$app->config('debug', true);

require_once('functions.php');
require_once('site.php');
require_once('admin.php');
require_once('admin-users.php');
require_once('admin-categories.php');
require_once('admin-products.php');

$app->run();

 ?>