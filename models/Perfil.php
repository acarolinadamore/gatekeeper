<?php
class Perfil {
    protected $conexao;

    function __construct() {
        try {
            $this->conexao = new PDO('pgsql:host=localhost;dbname=web3', 'postgres', 'postgres');
        } catch (PDOException $e) {
            $this->conexao = null;
        }        
    }    

    function all() {
        $sql = "SELECT * FROM perfil ORDER BY id";
        $sentenca = $this->conexao->query($sql);
        $sentenca->setFetchMode(PDO::FETCH_ASSOC);
        $dados = $sentenca->fetchAll();
        return $dados;
    }

    function create($dados) {
        $sql = "INSERT INTO perfil (nome_perfil, descricao) VALUES (:nome_perfil, :descricao)";
        $sentenca = $this->conexao->prepare($sql);
        $sentenca->bindParam(":nome_perfil", $dados['nome_perfil']);
        $sentenca->bindParam(":descricao", $dados['descricao']);
        $sentenca->execute();
    }

    function delete($id) {
        $sql = "DELETE FROM perfil WHERE id=:id";
        $sentenca = $this->conexao->prepare($sql);
        $sentenca->bindParam(":id", $id);
        $sentenca->execute();
    }

    function getById($id) {
        $sql = "SELECT * FROM perfil WHERE id=:id";
        $sentenca = $this->conexao->prepare($sql);
        $sentenca->bindParam(":id", $id);
        $sentenca->execute();
        $sentenca->setFetchMode(PDO::FETCH_ASSOC);
        $dados = $sentenca->fetch();
        return $dados;
    }    

    function update($dados) {
        $sql = "UPDATE perfil SET nome_perfil=:nome_perfil, descricao=:descricao WHERE id=:id";
        $sentenca = $this->conexao->prepare($sql);
        $sentenca->bindParam(":nome_perfil", $dados['nome_perfil']);
        $sentenca->bindParam(":descricao", $dados['descricao']);
        $sentenca->bindParam(":id", $dados['id']);
        $sentenca->execute();
    }
}
?>
