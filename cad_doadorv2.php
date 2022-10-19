<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Registrar-se</title>
<link rel="icon" href="images/meudesapego.png"> <!-- DEFINIR IMAGEM LOGOTIPO FAV DA ONG -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/cad.css"> <!-- REFERENCIANDO ARQUIVO LOCALIZADO css/cad.css STYLE CONTROL -->
<script src="./js/main.js" type='module' defer></script> <!-- API VIACEP -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script>

  document.getElementById("termosdeuso").setCustomValidity("Necessário aceitar os Termos de Uso");

</script>
</head>

<body>


<div class="cad-form">
    <form method="post" action="doador_controller.php?acao=inserir">
        <h2 class="text-center">Registrar-se</h2>   
        <div class="form-group">
            <label for="nomecompleto">Nome Completo</label>
            <input type="text" name="nomecompleto" class="form-control" id="nomecompleto" aria-describedby="nomeAjuda">
            <small id="nomeAjuda" class="form-text text-muted">Exemplo: José da Silva</small>
        </div>  

        <div class="form-group">
            <label for="datanasc">Data de Nascimento</label>
            <input type="date" name="datanasc" class="form-control" id="datanasc" aria-describedby="datanascimentoAjuda">
            <small id="nomeAjuda" class="form-text text-muted">Selecione uma data válida</small>
        </div> 

        <div class="form-group">
            <label for="cep">CEP</label>
            <input type="text" name="cep" class="form-control" id="cep" aria-describedby="cepAjuda">
            <small id="cepAjuda" class="form-text text-muted">Exemplo: 13222621</small>
        </div> 


        <div class="form-group">
            <label for="rua">Rua</label>
            <input type="text" name="rua" class="form-control" id="rua" aria-describedby="ruaAjuda">
            <small id="ruaAjuda" class="form-text text-muted">Exemplo: Avenida das Rosas</small>
        </div> 

        <div class="form-group">
            <label for="numero">Número</label>
            <input type="text" name="numero" class="form-control" id="numero" aria-describedby="numeroAjuda">
            <small id="numeroAjuda" class="form-text text-muted">Exemplo: 339</small>
        </div>

        <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" name="complemento" class="form-control" id="complemento" aria-describedby="complementoAjuda">
            <small id="complementoAjuda" class="form-text text-muted">Exemplo: Residencial Tulipas</small>
        </div> 

        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" name="estado" class="form-control" id="estado" aria-describedby="estadoAjuda">
            <small id="estadoAjuda" class="form-text text-muted">Exemplo: SP</small>
        </div> 

        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" class="form-control" id="cidade" aria-describedby="cidadeAjuda">
            <small id="cidadeAjuda" class="form-text text-muted">Exemplo: Itatiba</small>
        </div> 

        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" class="form-control" id="bairro" aria-describedby="bairroAjuda">
            <small id="bairroAjuda" class="form-text text-muted">Exemplo: Jardim Tamboré</small>
        </div> 

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailAjuda">
            <small id="emailAjuda" class="form-text text-muted">Digite um e-mail válido Exemplo: seuemail@email.com</small>
        </div>

        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="senha" class="form-control" id="senha" aria-describedby="senhaAjuda">
            <small id="senhaAjuda" class="form-text text-muted">Digite uma senha válida para autenticação</small>
        </div> 


        <div class="clearfix">
            <label class="float-left form-check-label">
            <input id="termosdeuso" onchange="this.setCustomValidity(validity.valueMissing ? 'Necessário aceitar os Termos de Uso' : '');" type="checkbox" required name="termos"> Aceito os <a href="termos.php" target="_blank">Termos de Uso </a></label>
        </div><p> 


        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
        </div>

    </form>
    <a href="login.php" class="btn btn-light btn-block" role="button" aria-pressed="true">Já é cadastrado? Clique aqui!</a>
    <a href="index.php" class="btn btn-light btn-block" role="button" aria-pressed="true">Voltar à página inicial</a>
</div>
</body>
</html>