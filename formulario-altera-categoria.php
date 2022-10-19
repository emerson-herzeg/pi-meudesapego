<?php 
	require_once("cabecalho.php");

	verificaNivelAcesso();

	$idcategoria = $_GET['idcategoria'];
	$categoriaDao = new CategoriaDao($conexao);
	$categoria = $categoriaDao->buscaCategoria($idcategoria);
?>
				 <div class="card" id="cardcategoria">
				 	<div class="card-header">
				 		Editar Categoria
				 	</div>
				 	<div class="card-body">
				 		<form action="controllers/altera-categoria.php" method="post" class="row g-3">
				 			<input type="hidden" name="idcategoria" value="<?= $categoria->getId(); ?>">
				 			<div class="col-auto">
				 				<label for="nome" class="form-label">Categoria:</label>
				 			</div>
				 			<div class="col-auto">
						 		<input type="text" name="nome" class="form-control" id="categoria" value="<?= $categoria->getNome(); ?>">
				 			</div>
						 	<div class="col-auto">
						 		<button type="submit" class="btn btn-primary">Salvar</button>
						 	</div>
						 </form>
				 	</div>
				 </div>
			</div>
		</div>
 	</body>
 </html>