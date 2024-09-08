<?php

$nome = $_POST["nome"];

// echo $nome;


print_r($_POST);

?>

<h1>Formulario</h1>

<form action="#" method="post">
    <label for="nome">Nome</label><br>
    <input type="text" name="nome"> <br>
    <label for="Idade">Idade</label><br>
    <input type="text" name="Idade"> <br>
    
    <label for="genero">genero</label><br>
    <input type="text" name="genero"> <br>
    <input type="submit" value="Enviar">
</form>

<a href="ajax.php">Ajax</a>