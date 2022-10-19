			<?php 
				require_once("cabecalho.php");

				verificaNivelAcesso();

			    $categoriaDao = new CategoriaDao($conexao);
			    $categorias = $categoriaDao->listaCategorias();

			    $iddoacao = $_GET['iddoacao'];

			    $doacaoDao = new DoacaoDao($conexao);
			    $doacao = $doacaoDao->buscaDoacao($iddoacao);
			?>
			<style type="text/css">
				select[readonly]{
					background: #eee;
					pointer-events: none;
					touch-action: none;
				}
				#foto{
					width: 50%;
				}

				div.some {
					display: none;
				}
				div.some.mostrar {
					display: block;
				}

				.link{
					text-decoration: underline;
					color: blue;
				}
			</style>
				<div class="card" id="carddoacao">
				 	<div class="card-header">
				 		Gerenciar Doação
				 	</div>
				 	<div class="card-body">
				 		<form action="controllers/altera-doacao.php" method="post" enctype="multipart/form-data">
				 			<input type="hidden" name="iddoacao" value="<?= $doacao->getId(); ?>">
				 			<div class="row mb-4">
								<label for="titulo" class="col-sm-2 col-form-label">Título:</label>
								<div class="col-sm-9">
									<input type="text" name="titulo" class="form-control" placeholder="O que você vai doar?" value="<?= $doacao->getTitulo(); ?>" readonly>
								</div>
							</div>
							<div class="row mb-4">
								<label for="descricao" class="col-sm-2 col-form-label">Descrição da doação:</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="descricao" rows="4" placeholder="Descrição do item à ser doado. Por exemplo: Cor, estado de conservação, etc." readonly><?= $doacao->getDescricao(); ?></textarea>
								</div>
							</div>
							<div class="row mb-4">
								<label for="idcategoria" class="col-sm-2 col-form-label">Categoria:</label>
								<div class="col-sm-9">
									<select class="form-select" name="idcategoria" readonly="readonly" aria-disabled="true" tabindex="-1">
                                        <?php 
                                            foreach ($categorias as $categoria):
                                                $essaEhACategoria = $doacao->getCategoria()->getId() == $categoria->getId(); //Verifico se os ids batem
                                                $selecao = $essaEhACategoria ? "selected='select'" : ""; //Se a condição acima for verdadeira, então ele atribui esse valor a minha option
                                         ?>
                                        <option value="<?= $categoria->getId()?>" <?= $selecao; ?>>
                                            <?= $categoria->getNome() ?>
                                        </option>
                                        <?php 
                                            endforeach;
                                         ?>
                                    </select>
								</div>
							</div>
							<div class="row mb-4">
								<label for="foto" class="col-sm-2 col-form-label">Foto:</label>
								<div class="col-sm-9">
									<input type="hidden" name="foto">
									<img id="foto" src="uploads/<?= $doacao->getFoto()?>">
								</div>
							</div>
							<div class="row mb-4">
								<label for="status" class="col-sm-2 col-form-label">Status</label>
								<div class="col-sm-9">
									<select class="form-select" name="status">
										<option value="Disponível" <?= ($doacao->getStatus() == 'Disponível')?'selected':'' ?>>Disponível</option>
										<option value="Aguardando" <?= ($doacao->getStatus() == 'Aguardando')?'selected':'' ?>>Aguardando</option>
										<option value="Doado" <?= ($doacao->getStatus() == 'Doado')?'selected':'' ?>>Doado</option>
									</select>
								</div>
							</div>
							<!-- Dados do doador - início -->
							<?php 
								$doador = $_SESSION['doador'];
								$telefone = $_SESSION['telefone'];
								$numero = $_SESSION['numero'];
								$rua = $_SESSION['rua'];
								$bairro = $_SESSION['bairro'];
								$cidade = $_SESSION['cidade'];
								$iddoador = $_SESSION['iddoador'];
							?>
							<div class="conteudo">
								<span class="link">Clique aqui para ver os dados do doador</span>
								<div class="some">
								<div class="row">
									<div class="col-md-11">
										<div class="card">
											<div class="card-header">Dados do Doador</div>
											<div class="card-body">
												<input type="hidden" name="iddoador" value="<?= $iddoador; ?>">
												<div class="row g-3">
													<div class="col-md-12">
														<label class="form-label">Nome:</label>
														<input type="text" class="form-control" value="<?= $doador; ?>" readonly>
													</div>
													<div class="col-md-12">
														<label class="form-label">Telefone:</label>
														<input type="text" class="form-control" value="<?= $telefone; ?>" readonly>
													</div>
													<div class="col-md-8">
														<label class="form-label">Rua:</label>
														<input type="text" class="form-control" value="<?= $rua; ?>" readonly>
													</div>
													<div class="col-md-4">
														<label class="form-label">Número:</label>
														<input type="text" class="form-control" value="<?= $numero; ?>" readonly>
													</div>
													<div class="col-md-6">
														<label class="form-label">Bairro:</label>
														<input type="text" class="form-control" value="<?= $bairro; ?>" readonly>
													</div>
													<div class="col-md-6">
														<label class="form-label">Cidade:</label>
														<input type="text" class="form-control" value="<?= $cidade; ?>" readonly>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>
							<!-- Dados do doador - fim -->
							<br>
						 	<div class="col-auto">
						 		<button type="submit" class="btn btn-primary btn-lg">Alterar</button>
						 	</div>
						</form>
						<script type="text/javascript">
							document.addEventListener('click', (e) => {
							  if (e.target.tagName.toLowerCase() === 'span' && e.target.parentNode.classList.contains('conteudo')) {
							    e.target.nextElementSibling.classList.toggle('mostrar');
							  }
							});
						</script>
					<?php require_once("rodape.php"); ?>