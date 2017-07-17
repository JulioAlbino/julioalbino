<!-- inicio menu -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand">
        <?php session_start();
          echo "Usuario: ". $_SESSION['usuarioNome'];
        ?>

      </a>
    </div>
    <?php if($_SESSION['usuarioNiveisAcessoId'] == "3"){ ?>
    <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastro 
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
              <li><a href="cadastrodeusuario.php">Cadastro de Usuario</a></li>
              <li><a href="enviar.php">enviar</a></li>
          </ul>
        </li>
    </ul>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">CIPA 
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="avaliacaodeseguranca.php">Avaliaçao de segurança</a></li>
          </ul>
        </li>
      </ul>
    <ul class="nav navbar-nav">
      <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Relatorios 
            <span class="caret"></span>
          </a>
        <ul class="dropdown-menu">
          <li><a href="relatorioavalicaofeitas.php">Relatorio Avalição respondidas</a></li>
          <li><a href="relatoriototalizador.php">Relatorio Totalizador</a></li>
        </ul>
      </li>
    </ul>
    <?php }elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){ ?>
    <ul class="nav navbar-nav">
      <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">CIPA 
              <span class="caret"></span>
          </a>
        <ul class="dropdown-menu">
            <li><a href="avaliacaodeseguranca.php">Avaliaçao de segurança</a></li>
        </ul>
      </li>
    </ul>
    <?php  }else{ ?>
    </ul>
    <ul class="nav navbar-nav">
      <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">CIPA 
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="avaliacaodeseguranca.php">Avaliaçao de segurança</a></li>
          </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Relatorios 
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="relatorioavalicaofeitas.php">Relatorio Avalição respondidas</a></li>
          <li><a href="relatoriototalizador.php">Relatorio Totalizador</a></li>
        </ul>
      </li>
    </ul>
    <?php  }?>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../funcoesphp/sair.php"><span class="glyphicon glyphicon-user"></span> sair</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- fim menu -->
		
