<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilo.css">
    <title>Document</title>
</head>
<body>
    



<?php
    require_once "produto.class.php";
    require_once "categoria.class.php";

    $categoria1 = new Categoria("Material Escolar");

    $categoria2 = new Categoria("Material de escritório");

    $produto = new Produto("Lápis Preto", "Lapís preto número 2", 2.2, array($categoria1, $categoria2));

    echo "<h1>Produto</h1>";
    echo "Nome: {$produto->getNome()}<br>";
    echo "Descrição: {$produto->getDescricao()}<br>";
    echo "Preço: " . number_format($produto->getPreco(), 2, ",",".") . "<br>";

    echo "<h2>Categoria(s)</h2>";

    foreach($produto->getCategoria() as $objeto_categoria)
    {
        echo "Descritivo: {$objeto_categoria->getDescritivo()}<br>";
    }


?>

</body>
</html>