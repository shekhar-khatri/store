<?php
/**
 * Created by PhpStorm.
 * User: Shekhar
 * Date: 11/21/2017
 * Time: 1:07 PM
 */
$info = "";
if(isset($_GET['info'])){
    $info = $_GET['info'];
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store </title>
</head>
<body>
<?php echo $info; ?>
<h1>Login</h1>
<form action="login.php" method="POST" >
    <p>Username: </p>
    <input type="text" name="username" />
    <p>Password: </p>
    <input type="password" name="password" />
    <br>
    <input type="submit" name="submit">
</form>

<hr>

<h1>Register</h1>
<form action="register.php" method="POST">
    <p>Username</p>
    <input type="text" name="username">
    <p>Password</p>
    <input type="password" name="password">
    <p>First Name</p>
    <input type="text" name="first_name">
    <p>Middle Name</p>
    <input type="text" name="middle_name">
    <p>Last Name</p>
    <input type="text" name="last_name">
    <p>Email</p>
    <input type="text" name="email">
    <p>Phone No</p>
    <input type="text" name="phone_no">
    <p>Address 1</p>
    <input type="text" name="address_1">
    <p>Address 2</p>
    <input type="text" name="address_2">
    <p>City</p>
    <input type="text" name="city">
    <p>State</p>
    <input type="text" name="state">
    <p>Country</p>
    <input type="text" name="country">
    <p>Postal</p>
    <input type="text" name="postal">
    <input type="submit" name="submit">
</form>
</body>
</html>
