<?php 
	function mostraAlerta($tipo)
	{
		if (isset($_SSESSION[$tipo])) {
?>
			<p class="alert-<?= $tipo ?>"><?= $_SSESSION[$tipo] ?></p>
<?php
			unset($_SSESSION[$tipo]);
		}
	}
 ?>