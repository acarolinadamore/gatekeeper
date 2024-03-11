<?php
  class NoticiaController {
    function listar() {
        $model = new Noticia();
        $dados = $model->all();
        include_once "views/listagemNoticias.php";
    }
    function novo() {
      $dados = array();
      $dados['id'] = 0;
      $dados['titulo'] = "";
      $dados['data'] = "";
      $dados['autor'] = "";
      $dados['categoria'] = "";
      $dados['descricao'] = "";      
      include_once "views/frmNoticia.php";
    }
    function salvar() {
      $dados = array();
      $dados['id'] = $_POST['id'];
      $dados['titulo'] = $_POST['titulo'];
      $dados['data'] = $_POST['data'];
      $dados['autor'] = $_POST['autor'];
      $dados['categoria'] = $_POST['categoria'];
      $dados['descricao'] = $_POST['descricao'];
      $model = new Noticia();
      if ($dados['id'] == 0) {
        $model->create($dados);
      } else {
        $model->update($dados);
      }
      header('location: listar');
    }
    function editar($id) {
      $model = new Noticia();
      $dados = $model->getById($id);

      include_once "views/frmNoticia.php";        
    }
    function excluir($id) {
        $model = new Noticia();
        $model->delete($id);
        header('location: '.APP.'noticia/listar');
    }
  }
?>