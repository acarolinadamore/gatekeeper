<?php
  class Noticia {
    protected $conexao;

    function __construct() {
        try {
            $this->conexao = new PDO('pgsql:host=localhost;dbname=web3', 'postgres', 'postgres');
        } catch (PDOException $e) {
            $this->conexao = null;
        }        
    }    
    function all() {
        $sql = "SELECT * FROM noticia ORDER BY data DESC, id";
        $sentenca = $this->conexao->query($sql);
        $sentenca->setFetchMode(PDO::FETCH_ASSOC);
        $dados = $sentenca->fetchAll();
        return $dados;
    }
    function create($dados) {
      $sql = "INSERT INTO noticia (titulo, data, autor, categoria, descricao) VALUES (:titulo, :data, :autor, :categoria, :descricao)";
      $sentenca = $this->conexao->prepare($sql);
      $sentenca->bindParam(":titulo", $dados['titulo']);
      $sentenca->bindParam(":data", $dados['data']);
      $sentenca->bindParam(":autor", $dados['autor']);
      $sentenca->bindParam(":categoria", $dados['categoria']);
      $sentenca->bindParam(":descricao", $dados['descricao']);
      $sentenca->execute();

    }

    function delete($id) {
      $sql = "DELETE FROM noticia WHERE id=:id";
      $sentenca = $this->conexao->prepare($sql);
      $sentenca->bindParam(":id", $id);
      
      $sentenca->execute();      
    }

    function getById($id) {
      $sql = "SELECT * FROM noticia WHERE id=:id";
      $sentenca = $this->conexao->prepare($sql);
      $sentenca->bindParam(":id", $id);
      
      $sentenca->execute();      
      $sentenca->setFetchMode(PDO::FETCH_ASSOC);
      $dados = $sentenca->fetch();
      return $dados;      
    }    

    function update($dados) {
      $sql = "UPDATE noticia SET titulo=:titulo, data=:data, autor=:autor, categoria=:categoria, descricao=:descricao WHERE id=:id";
      $sentenca = $this->conexao->prepare($sql);
      $sentenca->bindParam(":titulo", $dados['titulo']);
      $sentenca->bindParam(":data", $dados['data']);
      $sentenca->bindParam(":autor", $dados['autor']);
      $sentenca->bindParam(":categoria", $dados['categoria']);
      $sentenca->bindParam(":descricao", $dados['descricao']);
      $sentenca->bindParam(":id", $dados['id']);

      $sentenca->execute();

    }


  }
?>