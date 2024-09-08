<?php


$nome = "juan";
$idade = 16;

$frutas = ["Melancia", "Maça", "Uva"];

// var_dump($frutas);
// print_r($frutas);

// echo $frutas[0];


$array_associativo = [
    "nome" => "juan",
    "idade" => 16
];

// echo $array_associativo["nome"];

for ($i = 0; $i < count($frutas); $i++) {
    echo $frutas[$i] . "<br>";
}

foreach ($array_associativo as $chave => $valor) {
    echo "$chave: $valor<br>";
}

$a = 11;
while ($a <= 10) {
    # code...
}

$condicao = true;
if ($condicao) {
    # code...
} else if ($condicao) {
} else {
    # code ..
}

echo json_encode($frutas);
?>

<h1>Bom dia, <?php echo $nome ?>!</h1> <br>

Vc tem <?= $idade ?> anos <br>

<h2>Frutas que eu gosto: </h2>
<ul>
    <?php
        foreach ($frutas as $chave => $valor):
    ?>
        <li><?=$valor?></li>
    <?php endforeach?>
</ul>

<a href="form.php">formulario</a>
<style>
    body{
        background-color: #34f121;
    }
</style>