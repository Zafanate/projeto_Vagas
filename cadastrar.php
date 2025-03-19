<?php
require __DIR__ ."/vendor/autoload.php";

use \App\Emtiti\Vaga;

if(isset($__POST['titulo'],$__POST['descricao'],$__POST['ativo'])){
    $obvaga = new Vaga();
    $obvaga->titulo = $_POST['titulo'];
    $obvaga->descricao = $_POST['descricao'];
    $obvaga->ativo = $_POST['ativo'];
}


include __DIR__ ."/include/header.php";
include __DIR__ ."/include/formulario.php";
include __DIR__ ."/include/footer.php";

?>