<?php
use ExemploCrudPoo\Produtos;
require_once "../vendor/autoload.php";
$excluirproduto = new Produtos;
$excluirproduto->setId($_GET['id']);
$excluirproduto->excluirProduto();
header("location:visualizar.php");