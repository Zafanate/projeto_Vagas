<?php
namespace App\Entity;
use

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
    /**
     * CADASTAR
     * @return boolean
     */
    public function $cadastar(){
        //DEFINIR DATA
        $this->data = date('Y-m-d H:i:s');

        //INSERIR VAGA NO BANCO
        $obDatabase = new $Database('vagas');
        

    }
    
 }

  
?>