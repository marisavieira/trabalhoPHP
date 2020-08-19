<!DOCTYPE! html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CONSULTA | VM Fotografia</title>
		<link rel="sortcut icon" href="../imagens/icon.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="../css/consulta.css"/>		
		<link rel="stylesheet" href="../css/estilo.css">
	</head>
	
	<body>
	
	
	  <a id="sair" href="../php/login.php">SAIR</a>
      <h1 id="titulo">Consulta</h1>
	<div id="main">
	   
		<div id="dados">
		
			<table class="table table-bordered table-responsive-lg table-hover text-center mt-2">
			 <tr id="primeiralinha">
				<td>Codigo</td>
				<td>Nome</td>
				<td>Email</td>
				<td>Data</td>
				<td>Descoberta</td>
				<td>Mensagem</td>
				<td>Deletar</td>
			 </tr> 
		
		</div>		
			<?php
				include "conexao.inc";
				echo '<tbody>';
				$sql = mysqli_query($conn,'SELECT * FROM contato');
								
				while ($row = mysqli_fetch_assoc($sql)) {			
					echo '<td>' . $row['codigo'] . '</td>';
					echo '<td>' . $row['nome'] . '</td>';
					echo '<td>' . $row['email'] . '</td>';
					echo '<td>' . $row['data'] . '</td>';
					echo '<td>' . $row['descoberta'] . '</td>';				
					echo '<td>' . $row['mensagem'] . '</td>';
					echo "<td><a href=\"deleta.php?codigo=" . $row['codigo'] . "\"><img src='../imagens/61848.png' width='42' height='auto' /></a></td>";	 
					echo '</tr>';
				}
				echo '</tbody></table>';
			?>
	</div>
	</body>

</html>