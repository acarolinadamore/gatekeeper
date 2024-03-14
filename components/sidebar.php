<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Gatekeeper - Bem-vindo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./global.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
<div class="wrapper">

<nav id="sidebar">
      <div class="logo-container">
        <img class="spartan" src="./assets/img/spartan.svg" />
        <p class="logo-text">GateKeeper</p>
      </div>

      <div class="welcome-text-container">
        <p class="welcome-text">Bem-vindo, usuário</p>
        <p class="welcome-text">O que deseja gerenciar?</p>
      </div>

      <ul class="list-unstyled welcome-text-container">
        <li class="active">
          <a id="linkUsuarios" class="pulse" href="?page=listagemUsuario"
            >Usuários</a
          >
        </li>
        <li>
          <a class="pulse" href="#">Permissões</a>
        </li>
        <li>
          <a class="pulse" href="#">Perfis</a>
        </li>
      </ul>
    </nav>

    <div class="btn-collapse-container">
      <div class="btn-collapse-container">
        <button type="button" id="sidebarCollapse" class="btn btn-collapse">
          <i class="material-icons arrow_back_ios">arrow_back_ios</i>
        </button>
       
      </div>
    </div>


    <div id="content">

        <h2>Collapsible Sidebar Using Bootstrap 4</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="line"></div>

        <h2>Lorem Ipsum Dolor</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="line"></div>

        <h2>Lorem Ipsum Dolor</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="line"></div>

        <h3>Lorem Ipsum Dolor</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script>
      $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
          $('#sidebar').toggleClass('active');
          // Alterna a classe do ícone
          $(this)
            .find('.material-icons')
            .text(function (i, text) {
              return text === 'arrow_back_ios'
                ? 'arrow_forward_ios'
                : 'arrow_back_ios';
            });
        });
      });
    </script>


</body>
<style>
body {
        font-family: 'Poppins', sans-serif;
        background: #fafafa;
      }

      p {
        font-family: 'Poppins', sans-serif;
        font-size: 1.1em;
        font-weight: 300;
        line-height: 1.7em;
        color: #999;
      }

      a,
      a:hover,
      a:focus {
        color: inherit;
        text-decoration: none;
        transition: all 0.3s;
        margin-left: 12px;
        margin-bottom: 12px;
      }

      .navbar {
        padding: 15px 10px;
        background: #fff;
        border: none;
        border-radius: 0;
        margin-bottom: 40px;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
      }

      .navbar-btn {
        box-shadow: none;
        outline: none !important;
        border: none;
      }

      .line {
        width: 100%;
        height: 1px;
        border-bottom: 1px dashed #ddd;
        margin: 40px 0;
      }

      .wrapper {
        display: flex;
        width: 100%;
        align-items: stretch;
      }

      #sidebar {
        min-width: 250px;
        max-width: 250px;
        background: linear-gradient(45deg, #0c357a, #2d65cb);
        color: #fff;
        transition: all 0.3s;
      }

      #sidebar.active {
        margin-left: -250px;
      }

      #sidebar .sidebar-header {
        padding: 20px;
        background: #6da3cc;
      }

      #sidebar ul.components {
        padding: 20px 0;
        border-bottom: 1px solid #80c1e1;
      }

      #sidebar ul p {
        color: #fff;
      }

      #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
        border-radius: 40px 0 0 40px; /* Define o raio da borda */
        padding-left: 35px; /* Adiciona padding à esquerda */
      }

      #sidebar ul li a:hover {
        color: #1165b4;
        background: #fff;
        border-left: 2px solid #1165b4; /* Adiciona borda à esquerda */
        border-radius: 40px 0 0 40px; /* Define o raio da borda */
        padding-left: 35px;/* Adiciona padding à esquerda */
        margin-left: 12px;
      }

      #sidebar ul li.active > a,
      a[aria-expanded='true'] {
        color: #00388f;
        background: #ffffff;
        margin-left: 12px;
      }

      a[data-toggle='collapse'] {
        position: relative;
      }

      .dropdown-toggle::after {
        display: block;
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
      }

      ul ul a {
        font-size: 0.9em !important;
        padding-left: 30px !important;
        background: #1554b7; /*dentro*/
      }

      ul.CTAs {
        padding: 20px;
      }

      ul.CTAs a {
        text-align: center;
        font-size: 0.9em !important;
        display: block;
        border-radius: 5px;
        margin-bottom: 5px;
      }

      #content {
        width: 100%;
        padding: 20px;
        min-height: 100vh;
        transition: all 0.3s;
      }

      @media (max-width: 768px) {
        #sidebar {
          margin-left: -250px;
        }

        #sidebar.active {
          margin-left: 0;
        }

        #sidebarCollapse span {
          display: none;
        }
      }

</style>
</html>
