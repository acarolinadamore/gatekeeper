<?php
    include_once "controllers/NoticiaController.php";
    include_once "controllers/CategoriaController.php";include_once "controllers/UsuarioController.php";
    include_once "controllers/PermissaoController.php";
    include_once "models/Noticia.php";
    include_once "models/Permissao.php";
    include_once "models/Usuario.php";

    define("APP", "http://localhost/gatekeeper/");
    $url = $_GET['url'];
    $url = explode('/', $url);
    //var_dump($url);
    $nomeControlador = ucfirst($url[0]) . "Controller";
    $controller = new $nomeControlador();
    $acao = $url[1];
    if (count($url) == 2) {
        $controller->$acao();
    } else {
        $id = $url[2];
        $controller->$acao($id);
    }

?>