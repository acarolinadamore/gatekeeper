<?php
class Usuario {
    protected $conexao;

    function __construct() {
        try {
            $this->conexao = new PDO('pgsql:host=localhost;dbname=web3', 'postgres', 'postgres');
        } catch (PDOException $e) {
            $this->conexao = null;
        }        
    }    

    function all() {
        $sql = "SELECT * FROM usuario ORDER BY id";
        $sentenca = $this->conexao->query($sql);
        $sentenca->setFetchMode(PDO::FETCH_ASSOC);
        $dados = $sentenca->fetchAll();
        return $dados;
    }

    function create($dados) {
        $sql = "INSERT INTO usuario (nome, sexo, data_nascimento, cep, cidade, estado, bairro, complemento, logradouro, tipo) VALUES (:nome, :sexo, :data_nascimento, :cep, :cidade, :estado, :bairro, :complemento, :logradouro, :tipo)";
        $sentenca = $this->conexao->prepare($sql);
        $sentenca->bindParam(":nome", $dados['nome']);
        $sentenca->bindParam(":sexo", $dados['sexo']);
        $sentenca->bindParam(":data_nascimento", $dados['data_nascimento']);
        $sentenca->bindParam(":cep", $dados['cep']);
        $sentenca->bindParam(":cidade", $dados['cidade']);
        $sentenca->bindParam(":estado", $dados['estado']);
        $sentenca->bindParam(":bairro", $dados['bairro']);
        $sentenca->bindParam(":complemento", $dados['complemento']);
        $sentenca->bindParam(":logradouro", $dados['logradouro']);
        $sentenca->bindParam(":tipo", $dados['tipo']);
        $sentenca->execute();
    }

    function delete($id) {
        $sql = "DELETE FROM usuario WHERE id=:id";
        $sentenca = $this->conexao->prepare($sql);
        $sentenca->bindParam(":id", $id);
        $sentenca->execute();
    }

    function getById($id) {
        $sql = "SELECT * FROM usuario WHERE id=:id";
        $sentenca = $this->conexao->prepare($sql);
        $sentenca->bindParam(":id", $id);
        $sentenca->execute();
        $sentenca->setFetchMode(PDO::FETCH_ASSOC);
        $dados = $sentenca->fetch();
        return $dados;
    }    

    function update($dados) {
        $sql = "UPDATE usuario SET nome=:nome, sexo=:sexo, data_nascimento=:data_nascimento, cep=:cep, cidade=:cidade, estado=:estado, bairro=:bairro, complemento=:complemento, logradouro=:logradouro, tipo=:tipo WHERE id=:id";
        $sentenca = $this->conexao->prepare($sql);
        $sentenca->bindParam(":nome", $dados['nome']);
        $sentenca->bindParam(":sexo", $dados['sexo']);
        $sentenca->bindParam(":data_nascimento", $dados['data_nascimento']);
        $sentenca->bindParam(":cep", $dados['cep']);
        $sentenca->bindParam(":cidade", $dados['cidade']);
        $sentenca->bindParam(":estado", $dados['estado']);
        $sentenca->bindParam(":bairro", $dados['bairro']);
        $sentenca->bindParam(":complemento", $dados['complemento']);
        $sentenca->bindParam(":logradouro", $dados['logradouro']);
        $sentenca->bindParam(":tipo", $dados['tipo']);
        $sentenca->bindParam(":id", $dados['id']);
        $sentenca->execute();
    }
}
?>
