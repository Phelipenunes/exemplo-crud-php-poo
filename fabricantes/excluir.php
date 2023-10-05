<?php
use ExemploCrudPoo\Fabricante;
require_once "../vendor/autoload.php";
$fabricante = new fabricante;
$fabricante->excluirFabricante($conexao, $id);
header("location:visualizar.php");

