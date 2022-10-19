							<?php
								require_once("controllers/logica-usuario.php");
								verificaUsuario();
							?>
							<input type="hidden" name="iddoador" value="<?= idUsuario(); ?>">
							<div class="row mb-4">
								<label for="titulo" class="col-sm-2 col-form-label">Título:</label>
								<div class="col-sm-9">
									<input type="text" name="titulo" class="form-control" placeholder="O que você vai doar?">
								</div>
							</div>
							<div class="row mb-4">
								<label for="descricao" class="col-sm-2 col-form-label">Descrição da doação:</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="descricao" rows="4" placeholder="Descrição do item à ser doado. Por exemplo: Cor, estado de conservação, etc."></textarea>
								</div>
							</div>
							<div class="row mb-4">
								<label for="idcategoria" class="col-sm-2 col-form-label">Categoria:</label>
								<div class="col-sm-9">
									<select name="idcategoria" class="form-select">
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
									<input class="form-control" type="file" name="foto" id="foto">
                                	<div id="fotoHelp" class="form-text">Selecione fotos nas extensões JPEG ou PNG. Tamanho máximo 1MB</div>
								</div>
							</div>