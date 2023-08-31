<?php
//1) Verificar se tem mais de 5 letras
//2) Se é numero
//3) Se possui @
if(isset($_POST['acao'])){
	$nome = $_POST['nome'];
	$numero = $_POST['numero'];
	$email = $_POST['email'];
	if(strlen($nome) >= 5){
		echo 'Nosso nome tem mais ou igual a 5 letras';
		echo '<br>';
	}

	if(is_numeric($numero)){
		echo 'É numero!';
		echo '<br>';
	}

	if(strstr($email, '@') != ''){
		echo 'tem @';
		echo '<br>';
	}

}
?>
<form method="post">
	<input type="text" name="nome">
	<input type="text" name="numero">
	<input type="text" name="email">
	<input type="submit" name="acao">


</form>