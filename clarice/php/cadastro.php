<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8"/>
  <title>Tim Berners-Lee</title>
  <!--Para sites de busca encontrar o site-->
  <meta name="keywords" content="Tim Berners-Lee, W3C, WWW, HTML"/>
  <meta name="description" content="Página sobre Tim Berners-Lee"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"/>
  <link rel="icon" href="../imagens/tim1.jpg" type="image/x-icon"/>
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2|Gloria+Hallelujah&display=swap" rel="stylesheet"/>
  <link href="../css/normalize.css" rel="stylesheet"/>
  <link href="../css/estiloG.css" rel="stylesheet"/>     
</head>
<body>
  <?php
  $conexao = mysqli_connect("localhost","root","","clarice");
  if((!empty($_POST['nome'])) && (!empty($_POST['email'])) && (!empty($_POST['senha'])) && (!empty($_POST['mensagem']))){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $mensagem = $_POST['mensagem']; 
    $sql = "INSERT INTO CADASTRO VALUES('','$nome','$email','$senha','$mensagem', 1);";
    if(mysqli_query($conexao,$sql)){
  	  echo '<p class="text-center">Obrigado pela visita! Cadastro realizado com sucesso!</p>';
      echo '<p class="text-center"><a href="../html/index.html"> Voltar</a></p>';
    }
    else{
      echo '<p class="text-center">Erro ao cadastrar no Banco de Dados.</p>';
      echo '<p class="text-center"><a href="../html/index.html"> Voltar</a></p>';
    }
  }
  else{
    echo '<p class="text-center">Cadastro não efetuado.<br/>Favor preencher todos os campos.</p>';
    echo '<p class="text-center"><a href="../html/contato.html"> Voltar</a></p>';  
  }  	    
  ?>
</body>
</html>







