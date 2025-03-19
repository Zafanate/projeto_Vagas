<?php
namespace App\Emtiti;

 class Vaga{
    /**
     * IDENTIFICADOR UNICO DA VAGA
     * @var integer
     */
    public $id;

    /**
     * TITULO DA VAGA
     * @var string
     */
    public $titulo;
    
    /**
     * DESCRIÇÃO DA VAGA(pode conter html)
     * @var string
     */
    public $descricao;

    /**
     * DEFINE VAGA ATIVA
     * @var string(s/n)
     */
    public $ativo;

    /**
     * DATA DE PUBLI
     * @var string
     */
    public $data;
    
 }

  
?>