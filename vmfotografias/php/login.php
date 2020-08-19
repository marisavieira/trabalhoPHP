<!DOCTYPE html>
<html>
	<head>
		<title>LOGIN | VM Fotografia</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
		<link rel="stylesheet" type="text/css" href="../css/login.css"/>
		<link rel="sortcut icon" href="../imagens/icon.png" type="image/x-icon" /> <!-- Para colocar o icon na barra de endereco-->
		
		
	</head>
	
	<body>
		
		<header> 
			<div class="logomarca">
				<img src="../imagens/logo1.png">
				<nav class="menu" align="center">
					<ul>
						<a id="nselecionado" href="../index.html">Home</a>
						<a id="nselecionado" href="../paginas/fotografia.html">Fotografias</a>
						<a id="nselecionado" href="../paginas/album.html">Álbuns</a>
						<a id="nselecionado" href="../paginas/contato.html">Contato</a>
					</ul>		
				</nav>	
			</div>		
		</header>
	   <?php

        if(isset($_POST['enviar'])){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "vmfotografia";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $nome = $_POST['nome'];            
            $senha = $_POST['senha'];            

            $sql = "SELECT nome, senha FROM usuario WHERE nome = '$nome' and senha = '$senha'";
            
            $result = $conn->query($sql);
            
            if ($result != NULL and $result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    // localizacao da pagina
                    header('Location: consulta.php');
                }
            }
			else{
				echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.php';</script>";
			}
            $conn->close();
        }
		?>
		
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method='post'>
		<div class="login-box">
			<h1>Login</h1>
			<div class="textbox">
				<i class="fas fa-user"></i>
				<input type="text" placeholder="Nome" name="nome">
			</div>

			<div class="textbox">
				<i class="fas fa-lock"></i>
				<input type="password" placeholder="Senha" name="senha">
			</div>

			<input type="submit" class="btn" value="Entrar" name="enviar">
		</div>
		</form>
		
		
			
	</body>
</html>	