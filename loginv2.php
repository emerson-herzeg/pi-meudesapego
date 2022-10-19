<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Entrar</title>
<link rel="icon" href="images/meudesapego.png"> <!-- DEFINIR IMAGEM LOGOTIPO FAV DA ONG -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/login.css"> <!-- REFERENCIANDO ARQUIVO LOCALIZADO css/login.css STYLE CONTROL -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

<div class="login-form">
    <form action="controllers/login-controller.php" method="post">
        <h2 class="text-center">Entrar</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name="email" id="email" placeholder="E-mail" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
        </div>


<!-- FUNÇÃO "ESQUECEU A SENHA" e "LEMBRAR-ME" DEIXEI DESABILITADO POIS AINDA NÃO TEMOS ESSA FUNÇÃO NO BACKEND -->
       <!-- <div class="clearfix">



            <label class="float-left form-check-label"><input type="checkbox"> Lembrar-me</label>
            <a href="#" class="float-right">Esqueceu a senha?</a>
        </div> -->       
    </form>
    <a href="cad_doadorv2.php" class="btn btn-light btn-block" role="button" aria-pressed="true">Quero me cadastrar!</a>
    <a href="index.php" class="btn btn-light btn-block" role="button" aria-pressed="true">Voltar à página inicial</a>
</div>
<!-- Início VLibras -->
      <?php 
        require_once("vlibras.php");
      ?>
    <!-- Fim VLibras -->
</body>
</html>