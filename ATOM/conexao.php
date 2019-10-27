<?php  
	$servername = "localhost";
	$database = "userDB";
	$username = "root";
	$password = "root";

	$conn = mysqli_connect($servername, $username, $password, $database);

	if ($conn0->connect_error) {
		die("Erro de Conexão");
	}

	echo "Sucesso!";

	mysqli_close($conn);
	// $nome = $_POST['nome'];
	// $sobrenome = $_POST['sobrenome'];
	// $dataNascimento = $_POST['dataNascimento'];
	// $senha = $_POST['senha'];
	// $email = $_POST['email'];
	// $telefone = $_POST['telefone'];


	// $con = mysql_connect("localhost","root","root");
	// if (!$con)
 //  	{
 //  		die('Could not connect: ' . mysql_error());
 //  	}

	// mysql_select_db("userDB", $con);

	// $sql="INSERT INTO User(nome, sobrenome, dataNascimento, senha, email, telefone) VALUES (?, ?, ?, ?, ?, ?))";

	// if (!mysql_query($sql,$con))
	//   {
	//   die('Error: ' . mysql_error());
	//   }
	// echo "Registrado!";

	// mysql_close($con);


?>