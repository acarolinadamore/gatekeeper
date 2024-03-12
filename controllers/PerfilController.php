<?php
class PerfilController {
    function listar() {
        $model = new Perfil();
        $dados = $model->all();
        include_once "views/listagemPerfil.php";
    }

    function novo() {
        $dados = array();
        $dados['id'] = 0;
        $dados['nome_perfil'] = "";
        $dados['descricao'] = "";
        include_once "views/frmPerfil.php";
    }

    function salvar() {
        $dados = array();
        $dados['id'] = $_POST['id'];
        $dados['nome_perfil'] = $_POST['nome_perfil']; // Corrigido para acessar 'nome_perfil' em vez de 'nome'
        $dados['descricao'] = $_POST['descricao'];

        $model = new Perfil();
        if ($dados['id'] == 0) {
            $model->create($dados);
        } else {
            $model->update($dados);
        }
        header('location: listar');
    }

    function editar($id) {
        $model = new Perfil();
        $dados = $model->getById($id);
        include_once "views/frmPerfil.php";
    }

    function excluir($id) {
        $model = new Perfil();
        $model->delete($id);
        header('location: '.APP.'perfil/listar');
    }
}
?>
