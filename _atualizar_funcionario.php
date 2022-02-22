<?php

include 'conexao.php';	

$id = $_POST['id'];
$nome = $_POST['nome'];
$datanascimento = $_POST['datanascimento'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$estadocivil = $_POST['estadocivil'];

$sql = "UPDATE `digitro` SET `nome`='[$nome]',`datanascimento`='$datanascimento',`cpf`='$cpf',`email`='[$email]',`estadocivil`='[$estadocivil]' WHERE id_digitro = $id";

$atualizar = mysqli_query($conexao,$sql);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container" style="width:400px">
	<center>
		<h3>Atualizado com Sucesso!</h3>
		<div style="margin-top: 10px">
			<a href="listar_funcionarios.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
		</div>
	</center>
</div>