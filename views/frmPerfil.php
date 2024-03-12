<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gatekeeper</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container p-5">
    <h1>Formulário de Perfil</h1>
    <form action="<?php echo APP.'perfil/salvar';?>" method="POST">
        <div class="form-group">
            <label for="id">ID</label>
            <input readonly type="text" class="form-control" id="id" name="id" value="<?php echo $dados['id'];?>">
        </div>
        <div class="form-group">
            <label for="nome_perfil">Nome do Perfil</label>
            <input type="text" class="form-control" id="nome_perfil" name="nome_perfil" value="<?php echo $dados['nome_perfil'];?>">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao"><?php echo $dados['descricao'];?></textarea>
        </div>
        <!-- Se houver outros campos no perfil, adicione-os aqui -->
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
