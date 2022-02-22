<?php

include 'conexao.php';
echo $id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de cadastro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<style type="text/css">
		#tamanhoContainer {
			width: 500px;
		}

		#botao{
			background-color: #ff1168;
			color: #ffffff;
		}
	
	</style>
</head>
<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		
<div class ="container" id="tamanhoContainer" style="margin-top: 40px">
	<h4>Formulário De Cadastro</h4>
	<form action="_atualizar_funcionario.php" method="post" style="margin-top: 20px">
		<?php

		$sql = "SELECT * FROM `digitro` WHERE id_digitro = $id";
		$buscar = mysqli_query($conexao,$sql);
		while ($array = mysqli_fetch_array($buscar)){

			$id_digitro = $array['id_digitro'];
		    $nome = $array['nome'];
		    $datanascimento = $array['datanascimento'];
		    $cpf = $array['cpf'];
		    $email = $array['email'];
		    $estadocivil = $array['estadocivil'];
			?>

		<div class="form-group">
			<label>Nome</label>
			<input type="text" class="form-control" name="nome" value="<?php echo $nome ?>">
			<input type="text" class="form-control" name="id" value="<?php echo $id ?>" style="display:none;">
		</div>

		<div class="form-group">
			<label>Data de Nascimento</label>
			<input type="date" class="form-control" name="datanascimento" value="<?php echo $datanascimento ?>">
		</div>

		<div class="form-group">
			<label>CPF</label>
			<input type="text" class="form-control" name="cpf" value="<?php echo $cpf ?>">
		</div>

		<div class="form-group">
			<label>E-mail</label>
			<input type="email" class="form-control" name="email" value="<?php echo $email ?>">
		</div>

		<div class="form-group">
			<label>Estado Civil</label>
			<select class="form-control" name="estadocivil" value="<?php echo $estadocivil ?>">
				<option>Solteiro(a)</option>
				<option>Casado(a)</option>
				<option>Divorciado(a)</option>
				<option>Viúvo(a)</option>
			</select>
		</div>
		<div style="text-align:right; margin-top: 5px;">
			<button type="submit" id="botao" class="btn">Enviar</button>
		</div>
	<?php } ?>
	</form>
</div">
</body>
</html> 