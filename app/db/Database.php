<?php 
 namespace App\db;

 use /PDO;

 class Database{
        /**
         * HOST DE CONEXAO
         * @var string
         */
        const HOST = "localhost";
        /**
         * NOME DO BANCO
         * @var string
         */
        const NAME = 'vg_on';
        /**
         * NOME DE USUARIO
         * @var string
         */
        const USER = 'root';
        /**
         * SENHA
         * @var string
         */
        const PASSWORD = '123';
        /**
         * NOME TABELA
         * @var string
         */
        private $table;
        /**
         * INSTANCIA DE CONEXAO COM BD
         * @var PDO
         */
        private $connection;
        /**
         * DEFINE A TABELA
         * @param string 
         */
        public function __construct($table = null){
              $this->table = $table;
              $this->set_connection();
       }
       /**
        * METODO RESPONSAVEL POR CRIAR UMA CONEXAO COM BD
        */
       private function set_connection(){
              try{
                     $this->$connection = new PDO('mysql:host'.self::HOST.';dbname='.self::NAME,self::USER,self::PASSWORD);
                     $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              }catch(PDOException $e){
                     die('ERROR'. $e->getMessage());
              }
       }
}
?>