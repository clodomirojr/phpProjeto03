<?php

include 'conexao.php';

$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];


$sql = "insert into `estoque`(`nroproduto`,`nomeproduto`,`categoria`,`quantidade`,`fornecedor`) values ($nroproduto, '$nomeproduto',
'$categoria',$quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container text-center" style="width: 400px;margin-top: 20px;">
<div class="">
<h4>Produto adicionado com sucesso!</h4>
</div>
<div style="padding-top: 20px;">
<a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Item</a>
</div>
</div>