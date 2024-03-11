<?php
class PermissaoController {
    function listar() {
        $model = new Permissao();
        $dados = $model->all();
        include_once "views/listagemPermissao.php";
    }

    function novo() {
        $dados = array();
        $dados['id'] = 0;
        $dados['nome_permissao'] = "";
        $dados['descricao'] = "";
        include_once "views/frmPermissao.php";
    }

    function salvar() {
        $dados = array();
        $dados['id'] = $_POST['id'];
        $dados['nome_permissao'] = $_POST['nome_permissao'];
        $dados['descricao'] = $_POST['descricao'];

        $model = new Permissao();
        if ($dados['id'] == 0) {
            $model->create($dados);
        } else {
            $model->update($dados);
        }
        header('location: listar');
    }

    function editar($id) {
        $model = new Permissao();
        $dados = $model->getById($id);
        include_once "views/frmPermissao.php";
    }

    function excluir($id) {
        $model = new Permissao();
        $model->delete($id);
        header('location: '.APP.'permissao/listar');
    }
}
?>
