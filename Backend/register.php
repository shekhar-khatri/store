<?php
/**
 * Created by PhpStorm.
 * User: Shekhar
 * Date: 11/21/2017
 * Time: 6:11 PM
 */
require_once 'authentication.php';

if(isset($_POST['submit'])){
    $data = [
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'first_name' => $_POST['first_name'],
        'middle_name' => $_POST['middle_name'],
        'last_name' => $_POST['last_name'],
        'email' => $_POST['email'],
        'phone_no' => $_POST['phone_no'],
        'address_1' => $_POST['address_1'],
        'address_2' => $_POST['address_2'],
        'city' => $_POST['city'],
        'state' => $_POST['state'],
        'country' => $_POST['country'],
        'postal' => $_POST['postal'],
    ];

//    echo $data["username"];
//    echo $data["password"];
//    echo $data["first_name"];
//    echo $data["middle_name"];
//    echo $data["last_name"];
//    echo $data["email"];
//    echo $data["phone_no"];
//    echo $data["address_1"];
//    echo $data["address_2"];
//    echo $data["city"];
//    echo $data["state"];
//    echo $data["postal"];


    $auth = new Authentication();
    $auth->register_customer($data);

}

?>

