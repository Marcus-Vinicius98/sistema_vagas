<?php

 namespace App\Db;

 use  \App\PDO

 class Database
 {

    /**
     * Host de conexão com o banco de dados
     * @var String; 
     */
 	const HOST = 'localhost';

 	/**
 	 * Nome do banco de dados
 	 * @var String
 	 */
    const NAME = 'sistema_vagas';

    
    /**
     * Usuário do banco
     * @var String
     */
 	const USER = 'root';
    
    /**
     * Senha de acesso ao banco de dados
     * @var String
    */
    const PASS = 'banco123';

    /**
     * Nome da tabela a ser anunciada
     * @var String
     */
    private $table;

    /**
     * Instancia de uma conexão com o banco de dados
     * @var PDO
     *  */
    private $connection;

    /**
     * Define a tabela e instancia a conexao
     * @param String
     * */
    public function __construct($table = null)
    {
    	$this->table = $table;
    	$this->setConnection();
    }
    /**
     * Método responsavél por criar uma conexão com o banco de dados 
     */
    public function setConnection()
    {
    	try {
    		$this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
    		$this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    		
    	} catch (PDOException $e) {
    		die('Error '.$e->getMessage());
    	}

    }






 }


?>