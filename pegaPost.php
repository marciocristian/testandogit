<?php

//echo 'pegaPost';
 require_once "conexao.php";
//verifica se o post existe

$login = $_POST['login'];
$senha = $_POST['senha'];

$query = "SELECT * FROM port WHERE login = '$login' AND senha = '$senha'";

$querySelect = mysqli_query($conn,$query);

       if(mysqli_num_rows($querySelect) <=0){
           echo"<script type='text/javascript'>alert('Email ou cpf incorretos.');window.location.href='index.php';</script>";
           die();
       }
       else if(mysqli_num_rows($querySelect) > 0 ){//aqui você ta redirecionando pra página postagem, certo?

           //editado
           //setando os valores nas sessions
           //NT: você precisa startar a session antes de tudo,
           $_SESSION["login"] = $login;
           $_SESSION["senha"] = $senha;

           //setcookie("login", $cpf);

           header("Location:exibePagina.php"); //depois de mudar

       }
