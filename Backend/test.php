<?php
/**
 * Created by PhpStorm.
 * User: Shekhar
 * Date: 11/22/2017
 * Time: 6:58 PM
 */


$attrb = ['customers', 'users'];
$table = 'store';
for($i=0, $size = count($attrb); $i < $size; $i++){
    $data = "" . $attrb[$i] . ",";
    echo $data;
};


