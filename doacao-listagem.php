				<?php 
					require_once("cabecalho.php");

					verificaNivelAcesso();

				    $doacaoDao = new DoacaoDao($conexao);

					if ($_POST) {
						$pesquisa = $_POST['pesquisa'];
						$buscadoacao = $doacaoDao->listaDoacoes($pesquisa);
					} else {
						$buscadoacao = $doacaoDao->listaDoacoes();
					}

				?>
				<div class="card" id="carddoacao">
				 	<div class="card-header">
				 		Gerenciar Doação
				 	</div>
				 	<div class="card-body">
				 		<form method="post" action="">
				 			<div class="container">
				 				<div class="row justify-content-end">
				 					<div class="col-md-4">
						 				<div class="input-group">
							 				<input type="text" name="pesquisa" class="form-control" placeholder="Digite aqui a sua busca" aria-describedby="pesquisa" aria-label="Digite aqui a sua busca">
							 				<button class="btn btn-outline-secondary" type="submit" id="btnbuscar"><i class="bi bi-search"> Buscar</i></button>
								 		</div>
								 		<div align="right">
								 			<a href="doacao-listagem.php">Limpar Busca</a>
								 		</div>
						 			</div>
				 				</div>
				 			</div>
				 		</form>
				 		<div class="container">
				 			<div class="row">
					 		<?php
				 				foreach ($buscadoacao as $busca):
				 			?>
								<div class="col-md-3 col-xs-12 g-4">
						    		<div class="card h-100">
						    			<img src="uploads/<?= $busca->getFoto()?>" class="card-img-top img-fluid" alt="Foto Doação">
						      			<div class="card-body">
						        			<h5 class="card-title"><?= $busca->getTitulo(); ?></h5>
						        			<p class="card-text">Status: <?= $busca->getStatus(); ?></p>
						     			</div>
						     			<div class="card-footer">
						      				<a href="doacao-altera-formulario.php?iddoacao=<?= $busca->getId(); ?>" class="btn btn-primary">Gerenciar</a>
						      			</div>
						    		</div>
						  		</div>
							<?php
			 					endforeach;
			 				?>
							</div>
				 		</div>
					</div>
					<br>
					<br>
					<hr>
					<!-- PAGINAÇÃO -->
					<?php 
						$pc = $_SESSION['pc'];
						$tp = $_SESSION['tp'];

						$anterior = $pc -1;
						$proximo = $pc +1;
					?>

				 	<nav aria-label="Page navigation example">
					  <ul class="pagination justify-content-center">
					    <?php 
					    	if ($pc>=2) {
					    ?>
					    <li class="page-item">
					      <a href="?pagina=<?= $anterior ?>" class="page-link">Anterior</a>
					    </li>
					    <?php 
					     	} else {
					    ?>
					    <li class="page-item disabled">
					      <a href="#" class="page-link">Anterior</a>
					    </li>
					    <?php 
					    	}
					     ?>
					     <?php 
					     	if ($tp >= 1) {
					     		for ($i=1; $i < $tp+1; $i++) { 
					    ?>
					    			<li class="page-item"><a class="page-link" href="?pagina=<?= $i ?>"><?= $i ?></a></li>
					    <?php
					     		}
					     	}
					     ?>
					    <?php 
					    	if ($pc<$tp) {
					    ?>
					    <li class="page-item">
					      <a href="?pagina=<?= $proximo ?>" class="page-link">Próximo</a>
					    </li>
					    <?php 
					    	} else {
					    ?>
					    <li class="page-item disabled">
					      <a href="#" class="page-link">Próximo</a>
					    </li>
					    <?php 
					    	}
					    ?>
					  </ul>
					</nav>
					<?php require_once("rodape.php"); ?>