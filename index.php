<?php
//possibilita a session de ser criada
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Index</title>
</head>
<body>

     <h2>Digite login e senha</h2>
	 <form action='' method='post'>
        <input type="text" name="login" id="login" placeholder='Login'>
        <br>
        <input type="password" name="senha" id="senha" placeholder='Senha'>
        <br>
        <button type='submit'>Logar</button>
     </form>

</body>
</html>


<?php

//verifica se o post existe
if($_POST) {

        $login = $_POST['login'];
        $senha = $_POST['senha'];

        //verifica o login e a senha
        if($login > 0) {

            //cria session
            $_SESSION['login'] = $login;

            //redireciona a pagina
            header('Location: exibePagina.php');
        }
        else {

            echo 'Senha errada';

        }

    }

?>
