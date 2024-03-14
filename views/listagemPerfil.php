<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gatekeeper - Listagem de Perfis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php include("components/sidebar.php"); ?>
<div class="container p-5">
    <h1>Listagem de Perfis</h1>
    <a href="novo" class="btn btn-primary">Novo Perfil</a>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome do Perfil</th>
            <th scope="col">Descrição</th>
            <th scope="col">Excluir</th>
            <th scope="col">Editar</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($dados as $perfil) {
            echo "
            <tr>
                <th scope='row'>{$perfil['id']}</th>
                <td>{$perfil['nome_perfil']}</td>
                <td>{$perfil['descricao']}</td>
                <td>
                    <a href='excluir/{$perfil['id']}' class='btn btn-danger'>Excluir</a>
                </td>
                <td>
                    <a href='editar/{$perfil['id']}' class='btn btn-primary'>Editar</a>
                </td>
            </tr>
            ";
        }
        ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
