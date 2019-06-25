<?php
    if ( isset($_SERVER["HTTP_X_FORWARDED_FOR"]) ) {
        $ip=$_SERVER["HTTP_X_FORWARDED_FOR"] . ' ';
        echo 'Your IP is: ' . $ip;
    }
    else if ( isset($_SERVER["REMOTE_ADDR"]) ) {
        $ip=$_SERVER["REMOTE_ADDR"] . ' ';
        echo 'Your IP is: ' . $ip;
    } 
    else if ( isset($_SERVER["HTTP_CLIENT_IP"]) ) {
        $ip=$_SERVER["HTTP_CLIENT_IP"] . ' ';
        echo 'Your IP is: ' . $ip;
    }
    else {
        echo "I couldn't get your IP";
    }
?>