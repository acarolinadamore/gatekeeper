<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Gatekeeper - Listagem de Permissões</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />

</head>
<body>
<?php include("components/sidebar.php"); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-9">
            <div class="container p-5">
                <h1>Listagem de Permissões</h1>
                <a href="novo" class="btn btn-primary">Nova Permissão</a>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome da Permissão</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Excluir</th>
                        <th scope="col">Editar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($dados as $permissao) {
                        echo "
                        <tr>
                            <th scope='row'>{$permissao['id']}</th>
                            <td>{$permissao['nome_permissao']}</td>
                            <td>{$permissao['descricao']}</td>
                            <td>
                                <a href='excluir/{$permissao['id']}' class='btn btn-danger'>Excluir</a>
                            </td>
                            <td>
                                <a href='editar/{$permissao['id']}' class='btn btn-primary'>Editar</a>
                            </td>
                        </tr>
                        ";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>
</body>
</html>
