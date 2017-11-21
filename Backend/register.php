<?php
/**
 * Created by PhpStorm.
 * User: Shekhar
 * Date: 11/21/2017
 * Time: 6:11 PM
 */

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
        'postal' => $_POST['postal'],
    ];

}

?>

