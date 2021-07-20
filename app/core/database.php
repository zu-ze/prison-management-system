<?php 

class Database
{
    /**
     * Database connection
     */
    protected $database;

    /**
     * SQL statment
     */
    protected $sql;
    
    public function __construct($config)
    {
        $dsn = $config['dsn'];
        $user = $config['user'];
        $pword = $config['pword'];
        try {
            $this->database = new PDO($dsn, $user, $pword, 
                                    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            return $this->database;
        } catch (PDOExecption $e) {
            return $e->getMessage();
        }
    }

        /**
     * This function, prepare, prepares a SQL statement for execution.
     * @access public
     * @param {String} $sql
     * @return {String} the prepared statement
     */
    public function prepare($sql)
    {
        return $this->conn->prepare($sql);
    }

    /**
     * This function, query, executes SQL statement. 
     * @access public
     * @param {String} $sql
     * @return $result 
     */
    public function query($sql)
    {
        $this->sql = $sql;
        // write SQL statement into log. 
        $str = $sql . " [" . date("Y-m-d H:i:s") . "]".PHP_EOL;
        file_put_contents("log.txt", $str, FILE_APPEND);

        $result = $this->database->query($this->sql);

        return $result;
    }

    /**
     * This function, getOne, gets the first column of the first record.
     * @access public
     * @param $sql 
     * @return value of the column.
     */
    public function getOne($sql)
    {
        $result = $this->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);

        if ($row)
            return $row;
        else
            return false;
    }

    /**
     * This function, getRow, gets one record. 
     * @access public
     * @param $sql 
     * @return {array} $result
     */
    public function getRow($sql)
    {
        if ($result = $this->query($sql)) {
            $row = $result->fetch(PDO::FETCH_ASSOC);
            return $row;
        } else
            return false;
    }

    /**
     * This function, getAll, gets all records. 
     * @access public
     * @param $sql 
     * @return {array} $list
     */
    public function getAll($sql)
    {
        $result = $this->query($sql);
        $list = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC))
            $list[] =$row;
        return $list;
    }

    /**
     * This function, getCol, gets values of a column. 
     * @access public
     * @param $sql
     * @return {string} $list
     */
    public function getCol($sql)
    {
        $result = $this->query($sql);
        $list = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC))
            $list[] = $row[0];
        return $list;
    }
    
}