<?php
/**
 * Created by PhpStorm.
 * User: Shekhar
 * Date: 11/21/2017
 * Time: 1:08 PM
 */

class Authentication {

    public $connection;

    public function __construct()
    {
        //Connection to database
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'store';

        $this->connection = new mysqli($host, $user, $password, $database);

        if($this->connection->connect_error){
            echo "Unable to connect to Database";
        }


    }


    public function login($username, $password){
        //query for given username and password
        $result = $this->connection->query("SELECT * FROM `users` WHERE `username`='$username' and `password`='$password'");
        if($result){
            //Fetch Result
//            while($row = $result->fetch_object()){
//                $user_arr[] = $row;
//            }
            echo "Login Successful";
            //Free result
            $result->close();
            $this->connection->next_result();
        }

        else{
            echo "Login Unsuccessful";
        }

        $this->connection->close();
    }

    public function register_customer($data){
        //query to add customer
        //first step: add user account
        $sql = "INSERT INTO `users`(`username`, `password`, `roles`) VALUES ('$data->username','$data->password','customer')";
        $insert1 = $this->connection->query($sql);
        if($insert1){
            $result = $this->connection->query("SELECT MAX(id) FROM `users`");

        }
    }



}