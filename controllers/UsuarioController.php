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

    function criarConta() {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          // Recupere os dados do formulário de criar conta
          $dados = array();
          $dados['nome'] = $_POST['nome'];
          $dados['email'] = $_POST['email'];
          $dados['senha'] = $_POST['senha'];
          $dados['tipo'] = $_POST['tipo']; // Adicione o tipo de usuário (comprador, vendedor, entregador, etc.)

          // Valide os dados, por exemplo, verifique se todos os campos obrigatórios estão presentes

          // Crie uma instância do modelo de usuário e salve os dados no banco de dados
          $model = new Usuario();
          $model->create($dados);

          // Redirecione para a página de login após a criação da conta
          header('Location: '.APP.'login');
          exit();
      } else {
          // Exiba o formulário de criar conta
          include_once "views/frmCriarConta.php";
      }
  }

        function login() {
            // Verifique se o formulário de login foi submetido
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email']) && isset($_POST['senha'])) {
                // Autentique o usuário com base no e-mail e senha fornecidos
                $model = new Usuario();
                $usuario = $model->authenticate($_POST['email'], $_POST['senha']);
                
                // Se o usuário foi autenticado com sucesso, inicie a sessão e redirecione-o
                if ($usuario) {
                    session_start();
                    $_SESSION['usuario'] = $usuario; // Armazene os dados do usuário na sessão
                    header('Location: '.APP.'perfil'); // Redirecione para a página de perfil do usuário
                    exit();
                } else {
                    // Se as credenciais estiverem incorretas, exiba uma mensagem de erro na página de login
                    $erro = "Credenciais inválidas. Tente novamente.";
                    include_once "views/frmLogin.php";
                }
            } else {
                // Se o formulário não foi submetido, exiba a página de login
                include_once "views/frmLogin.php";
            }
        }
    
        function logout() {
            session_start();
            session_destroy(); // Encerre a sessão do usuário
            header('Location: '.APP.'login'); // Redirecione para a página de login
            exit();
        }



}
?>
