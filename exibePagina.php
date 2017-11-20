<?php
session_start();

//echo 'exibe pagina';

//var_dump($_SESSION);

if(isset($_SESSION['login'])) {
?>

    <h1>Bem vindo a página</h1>

    <form action='' method='post'>
        <button name='submit' type='submit'>Deslogar</button>
    </form>

<?php

    //verifica se o botao foi clicado
    if(isset($_POST['submit']))
    {
        deslogar(); //destroi a session
        header('Location: index.php');  //redireciona
    }

}
else {

   header('Location: index.php');

}

/**
* limpa a session
*/
function deslogar() {
    session_destroy();
    session_unset();
}
