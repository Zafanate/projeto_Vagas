<?php
require __DIR__ ."/vendor/autoload.php";

use \App\Emtiti\Vaga;

if(isset($__POST['titulo'],$__POST['descricao'],$__POST['ativo'])){
    $obVaga = new Vaga();
    $obVaga->titulo = $__POST['titulo'];
    $obVaga->descricao = $__POST['descricao'];
    $obVaga ->ativo = $__POST['ativo'];
}


include __DIR__ ."/include/header.php";
include __DIR__ ."/include/formulario.php";
include __DIR__ ."/include/footer.php";

?>