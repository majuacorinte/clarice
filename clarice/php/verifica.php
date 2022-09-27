<?php  	
/*
  Verificar se existe um email enviado via POST
*/
	if(isset($_POST["email"])){
    	$email = $_POST["email"];
    	$senha = $_POST["senha"];
    	$perfil = $_POST["perfil"];
    }
	$conexao = mysqli_connect("localhost","root","","clarice");
	$sql = "SELECT * FROM CADASTRO WHERE EMAIL='$email' AND SENHA='$senha' AND PERFIL='$perfil'";

//Executar a instrução no banco
  	$selecionado = mysqli_query($conexao, $sql);
    
//Verifica se selecionou 1 cliente
  	if(mysqli_num_rows($selecionado)==1){
//Transforma o selecionado em vetor
  		$vetor = mysqli_fetch_row($selecionado);
      
      	$perfilBanco = $vetor[5];
  		if ($perfil == 1){
  			header("Location:../html/index.html");
		  }
    	else{
  			header("Location:../html/admin.html");
    	//$vetorSelecionado = mysqli_fetch_row($selecionado);
		}
  	}
	  if(mysqli_num_rows($selecionado)==2){
		$vetor = mysqli_fetch_row($selecionado);
	
		$perfilBanco = $vetor[5];
		if($perfilBanco == 2){
			header("Location:../html/admin.html");
		}
		else{
			header("Location:../html/index.html");
		}
	}
	
  	else{
  		 echo '<p>Usuário não encontrado</p>';
  		 echo '<p><a href="../login.html">Voltar</a></p>';
  	}


?>