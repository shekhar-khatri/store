<?php
/**
 * Created by PhpStorm.
 * User: Shekhar
 * Date: 11/21/2017
 * Time: 1:08 PM
 */
require_once 'database.php';
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
        //Check username and password exists
        $sql = "SELECT * FROM `users` WHERE `username`='$username' and `password`='$password'";
        $query = $this->connection->query($sql);
        $this->connection->close();
        if($query->num_rows === 1){
            header('location:index.php?info=loggedin');
        };

    }

    public function register_customer($data){


        //Get data entered by user
        $username = $data["username"];
        $password = $data["password"];
        $first_name = $data["first_name"];
        $middle_name = $data["middle_name"];
        $last_name = $data["last_name"];
        $email = $data["email"];
        $phone_no = $data["phone_no"];
        $address_1 = $data["address_1"];
        $address_2 = $data["address_2"];
        $city = $data["city"];
        $state = $data["state"];
        $country = $data["country"];
        $postal = $data["postal"];

        //Add user to list

        



        $this->connection->close();

    }



}