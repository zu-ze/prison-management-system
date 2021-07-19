<?php 

class Database
{
    private $database;
    
    public function __construct($config)
    {
        $dsn = $config['dsn'];
        $user = $config['user'];
        $pword = $config['pword'];
        try {
            $this->database = new PDO($dsn, $user, $pword);

            return $this->database;
        } catch (PDOExecption $e) {
            return false;
        }
    }
}