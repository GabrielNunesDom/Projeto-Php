<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Funcionários</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/63c547989b.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container" style="margin-top: 40px">
		<h3>Lista Dos Funcionários</h3>
		<br>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Nome</th>
		      <th scope="col">Data Nascimento</th>
		      <th scope="col">Cpf</th>
		      <th scope="col">Email</th>
		      <th scope="col">Estado Civil</th>
		      <th scope="col">Ação</th>
		    </tr>
		  </thead>

		    	<?php
		    		include 'conexao.php';
		    		$sql ="SELECT * FROM `digitro`";
		    		$busca = mysqli_query($conexao,$sql);

		    		while ($array = mysqli_fetch_array($busca)){

		    			$id_digitro = $array['id_digitro'];
		    			$nome = $array['nome'];
		    			$datanascimento = $array['datanascimento'];
		    			$cpf = $array['cpf'];
		    			$email = $array['email'];
		    			$estadocivil = $array['estadocivil'];
		    			?>
		    <tr>
		    	<td><?php echo $nome ?></td>

		    	<td><?php echo $datanascimento ?></td>

		    	<td><?php echo $cpf ?></td>

		    	<td><?php echo $email ?></td>

		    	<td><?php echo $estadocivil ?></td>

		    	<td><a class="btn btn-warning" style="color:#fff" href="editar_funcionarios.php?id=<?php echo $id_digitro ?>" role="button"><i class="fa-solid fa-pen-to-square"></i>&nbsp;Editar</a>

		    		<a class="btn btn-danger" style="color:#fff" href="deletar_funcionarios.php?id=<?php echo $id_digitro ?>" role="button"><i class="fa-solid fa-trash-can"></i>&nbsp;Excluir</a>
		    	</td>
		    </tr>
		    <?php } ?>
		  </tbody>
		</table>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>