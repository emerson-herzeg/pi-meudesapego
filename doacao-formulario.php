			<?php 
				require_once("cabecalho.php");

				//verificaUsuario();
				
				$categoria = new Categoria('');
			    $categoria->setId(1);

			    $doacao = new Doacao("", "", "", "Disponível", "0000-00-00", "", $categoria, 1); //Passo os meu parâmetros vazios, são obrigatórios, segundo o que definimos na classe Produto, porém posso passar um valor vazio. Menos categoria, pois preciso trazer a listagem.

			    $categoriaDao = new CategoriaDao($conexao);
			    $categorias = $categoriaDao->listaCategorias();
			?>
				<div class="card" id="cardcategoria">
				 	<div class="card-header">
				 		Fazer uma Doação
				 	</div>
				 	<div class="card-body">
				 		<form action="controllers/adiciona-doacao.php" method="post" enctype="multipart/form-data">
							<?php 
				 				require_once("doacao-base-formulario.php");
				 			?>
						 	<div class="col-auto">
						 		<button type="submit" class="btn btn-primary btn-lg">Doar!</button>
						 	</div>
						</form>
					<?php require_once("rodape.php"); ?>