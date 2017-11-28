<?php
/**
 * Created by PhpStorm.
 * User: Shekhar
 * Date: 11/24/2017
 * Time: 4:33 PM
 */

require_once 'Extra.php';

class Database
{
    public function __construct($db)
    {
        $this->extra = new Extra ();
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = $db;

        //Connection to Database
        $this->connection = new mysqli($host, $user, $password, $database);
        //Connection Checking
        if($this->connection->connect_error){
            //Write Error to file
            $timestamp = $this->extra->get_timestamp();
            $error = "Database Connection Error($timestamp):" . $this->connection->connect_error . "\n";
            $this->extra->log_error($error);
            exit;
        }
    }


    // SELECT * FROM table_name;
    public function select_all($table){
        $query = $this->connection->query("SELECT * FROM `$table`");
        $result = $query->fetch_assoc();
        return $result;
        //returns array of datas
    }


    //select distinct attributes from a table
    public function select_distinct($table, $attrb){
        $sql = "SELECT `$attrb` FROM `$table`";
    }
}