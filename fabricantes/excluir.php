<?php
use ExemploCrudPoo\Fabricante;
require_once "../vendor/autoload.php";
$fabricante = new fabricante;
$fabricante->setId($_GET['id']);
$fabricante->excluirFabricante();
header("location:visualizar.php");

