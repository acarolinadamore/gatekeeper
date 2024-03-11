<?php
class UsuarioController {
    function listar() {
        $model = new Usuario();
        $dados = $model->all();
        include_once "views/listagemUsuarios.php";
    }

    function novo() {
        $dados = array();
        $dados['id'] = 0;
        $dados['nome'] = "";
        $dados['sexo'] = "";
        $dados['data_nascimento'] = "";
        $dados['cep'] = "";
        $dados['cidade'] = "";
        $dados['estado'] = "";
        $dados['bairro'] = "";
        $dados['complemento'] = "";
        $dados['logradouro'] = "";
        $dados['tipo'] = "";
        include_once "views/frmUsuario.php";
    }

    function salvar() {
        $dados = array();
        $dados['id'] = $_POST['id'];
        $dados['nome'] = $_POST['nome'];
        $dados['sexo'] = $_POST['sexo'];
        $dados['data_nascimento'] = $_POST['data_nascimento'];
        $dados['cep'] = $_POST['cep'];
        $dados['cidade'] = $_POST['cidade'];
        $dados['estado'] = $_POST['estado'];
        $dados['bairro'] = $_POST['bairro'];
        $dados['complemento'] = $_POST['complemento'];
        $dados['logradouro'] = $_POST['logradouro'];
        $dados['tipo'] = $_POST['tipo'];

        $model = new Usuario();
        if ($dados['id'] == 0) {
            $model->create($dados);
        } else {
            $model->update($dados);
        }
        header('location: listar');
    }

    function editar($id) {
        $model = new Usuario();
        $dados = $model->getById($id);
        include_once "views/frmUsuario.php";
    }

    function excluir($id) {
        $model = new Usuario();
        $model->delete($id);
        header('location: '.APP.'usuario/listar');
    }
}
?>
