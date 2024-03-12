<?php
define("APP", "http://localhost/gatekeeper/");

// Verifica se não há uma ação específica do controlador na URL
if (empty($_GET['url']) || $_GET['url'] === '/' || $_GET['url'] === 'index') {
    include_once "index.html";
    exit();
}

// Inclui os arquivos dos controladores e modelos
include_once "controllers/Controller.php";
include_once "controllers/NoticiaController.php";
include_once "controllers/CategoriaController.php";
include_once "controllers/UsuarioController.php";
include_once "controllers/PermissaoController.php";
include_once "controllers/PerfilController.php";
include_once "models/Noticia.php";
include_once "models/Usuario.php";
include_once "models/Permissao.php";
include_once "models/Perfil.php";

// Extrai a URL e determina o controlador e ação a serem executados
$url = $_GET['url'] ?? '';
$url = explode('/', $url);
$nomeControlador = ucfirst($url[0] ?? '') . "Controller";
$controller = new $nomeControlador();
$acao = $url[1] ?? '';

// Executa a ação do controlador ou exibe a página de boas-vindas
if (empty($acao)) {
    include_once "index.html";
    exit();
} else {
    if (count($url) == 2) {
        $controller->$acao();
    } else {
        $id = $url[2] ?? '';
        $controller->$acao($id);
    }
}
?>
