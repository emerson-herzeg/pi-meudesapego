<?php 
	require_once("cabecalho.php");
	verificaNivelAcesso();
?>
				 <div class="card" id="cardcategoria">
				 	<div class="card-header">
				 		Gerenciar Categoria
				 	</div>
				 	<div class="card-body">
				 		<form action="controllers/adiciona-categoria.php" method="post" class="row g-3">
				 			<div class="col-auto">
				 				<label for="nome" class="form-label">Categoria:</label>
				 			</div>
				 			<div class="col-auto">
						 		<input type="text" name="nome" class="form-control" id="categoria">
				 			</div>
						 	<div class="col-auto">
						 		<button type="submit" class="btn btn-primary">Cadastrar</button>
						 	</div>
						 </form>
						 <hr>
						 <br>

						 <!-- LISTAGEM	-->
						 <table class="table table-hover">
						 	<thead>
						 		<tr>
						 			<th>ID</th>
						 			<th style="width: 50%">Descrição</th>
						 			<th style="width: 30%">Ações</th>
						 		</tr>
						 	</thead>
						 	<tbody>
						 	<?php 
					 			$categoriaDao = new CategoriaDao($conexao);
					 			$categorias = $categoriaDao->listaCategorias();
					 			foreach ($categorias as $categoria):
					 		 ?>
					 		 	<tr>
					 		 		<th scope="row"><?= $categoria->getId();?></th>
									<td><?= $categoria->getNome();?></td>
					 		 		<td>
					 		 			<div class="row">
					 		 				<div class="col">
					 		 					<a href="formulario-altera-categoria.php?idcategoria=<?= $categoria->getId(); ?>" class="btn btn-outline-info" title="Editar">
								 					<i class="bi bi-pencil-square"> Editar</i>
								 				</a>
					 		 				</div>
					 		 				<div class="col">
					 		 					<form action="controllers/remove-categoria.php" method="post">
								 					<input type="hidden" name="idcategoria" value="<?= $categoria->getId(); ?>">
								 					<button class="btn btn-outline-danger">
									 					<i class="bi bi-trash"> Excluir</i>
									 				</button>
								 				</form>
					 		 				</div>
					 		 			</div>
						 			</td>
					 		 	</tr>
					 		 <?php endforeach;?>
						 	</tbody>
						</table>
				 	</div>
				 	<br>

				 	<!-- PAGINAÇÃO CASO HAJA -->
				 	<nav aria-label="Page navigation example">
					  <ul class="pagination justify-content-center">
					    <li class="page-item disabled">
					      <a class="page-link">Anterior</a>
					    </li>
					    <li class="page-item active"><a class="page-link" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item">
					      <a class="page-link" href="#">Próximo</a>
					    </li>
					  </ul>
					</nav>
				 </div>
			</div>
		</div>
 	</body>
 </html>