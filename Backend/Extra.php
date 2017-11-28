<?php
/**
 * Created by PhpStorm.
 * User: Shekhar
 * Date: 11/24/2017
 * Time: 4:50 PM
 */

class Extra
{


    public function get_timestamp(){
        date_default_timezone_set("Asia/Kathmandu");
        $date = date("Y-m-d"). " " . date("h:i:s") ." ". date("a");
        return $date;
    }

    public function log_error($error){
        $f = fopen('log.txt',"a+");
        fwrite($f, $error);
        fclose($f);
    }
}