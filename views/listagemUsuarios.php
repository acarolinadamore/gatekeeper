<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gatekeeper</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <?php include("components/sidebar.php"); ?>
<div class="container p-5">
    <h1>Listagem de Usuários</h1>
    <a href="novo" class="btn btn-primary">Novo Usuário</a>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Sexo</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">CEP</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            <th scope="col">Bairro</th>
            <th scope="col">Complemento</th>
            <th scope="col">Logradouro</th>
            <th scope="col">Tipo</th>
            <th scope="col">Excluir</th>
            <th scope="col">Editar</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Verifica se a variável $dados está definida e não é nula
        if (isset($dados) && is_array($dados)) {
            foreach($dados as $usuario) {
                echo "
                <tr>
                    <th scope='row'>{$usuario['id']}</th>
                    <td>{$usuario['nome']}</td>
                    <td>{$usuario['sexo']}</td>
                    <td>{$usuario['data_nascimento']}</td>
                    <td>{$usuario['cep']}</td>
                    <td>{$usuario['cidade']}</td>
                    <td>{$usuario['estado']}</td>
                    <td>{$usuario['bairro']}</td>
                    <td>{$usuario['complemento']}</td>
                    <td>{$usuario['logradouro']}</td>
                    <td>{$usuario['tipo']}</td>
                    <td>
                        <a href='excluir/{$usuario['id']}' class='btn btn-danger'>Excluir</a>
                    </td>
                    <td>
                        <a href='editar/{$usuario['id']}' class='btn btn-primary'>Editar</a>
                    </td>
                </tr>
                ";
            }
        } else {
            echo "<tr><td colspan='13'>Nenhum usuário encontrado.</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
