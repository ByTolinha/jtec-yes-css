<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="../js/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-5.2.2-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="../css/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript">
		//$(document).ready(function(){
			//$("#enviar").click(function(){
  			//$.ajax({
  				///url: "script_noticia.php",
  				//type: "POST",
  				//data: "nome="+$("#nome").val()+"&descricao="+$("#descricao").val()+"&categoria="+$("#categoria").val(),
  				//dataType: "html"
  			//}).done(function(resposta) {
	    //$("p").html(resposta);

		//}).fail(function(jqXHR, textStatus ) {
	    //console.log("Request failed: " + textStatus);

		//}).always(function() {
	    //console.log("completou");
		//});
  			//});
				//});
	</script>
</head>
<body>

	<div class="container bg-light mt-5">
	<h2><i>Crie sua nova postagem</i></h2>
		<div id="cadastro" class="container">
			<div class="group1">
				<form action="script_noticia.php" method="POST" enctype="multipart/form-data">
				<input class="form-control" placeholder="Título" type="text" name="nome">
				<textarea class="form-control" style="height: 300px;" placeholder="Descrição..." name="descricao"></textarea>
			</div>

			<div class="group container col-8">
				<select class="form-control" name="categoria">
				<option disabled selected>Selecione a categoria</option>
				<?php
					require('conecta.php');
					$listagem = $conn->prepare('SELECT * FROM tb_categoria');
					$listagem->execute();
					while ($lista = $listagem->fetch(PDO::FETCH_ASSOC)) {
				?>
				<option value="<?php echo $lista['id']?>"><?php echo $lista['nm_categoria']?></option>
				<?php
					}
				?>
				</select>
				    <img id="imge" src="foto.png">
					<input id="imagem" type="file" name="imagem"/>
				<div class="btn-group-md gap-2 mb-3">
					<button onclick="history.go(-1);" class="btn btn-light">Voltar</button>
					<button id="enviar" type="submit" class="btn btn-light">Enviar</button>
				</form>
				</div>
			</div>

			</div>
		<p></p>
	</div>

	<script>
		const image = document.querySelector("#imge"),
		input = document.querySelector("#imagem");

		input.addEventListener("change", () => {
			image.src = URL.createObjectURL(input.files[0]);
		});
	</script>
	<footer class="container-fluid">
	<div id="info">
		<div class="row col-12 bg-light">
			<p>| Sobre a Etec</p>
			DESCRIÇÃO DA Etec
			<p>| Email Informativo</p>
		</div>
		<div class="row col-12 bg-light">
			<p>| Últimos comentários</p>
			DESCRIÇÃO DA Etec
			<p>| Email Informativo</p>
		</div>
	</div>
	</footer>
</body>
</html>