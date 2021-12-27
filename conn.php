<?php

//clever cloud DB connect Details

$host='bkh0w9hocxm40oui3tar-mysql.services.clever-cloud.com:3306';
$username='uxrhj9beyinutnxh';
$password='PV0NOkhpF4VRYljdKSea';
$database='bkh0w9hocxm40oui3tar';

//infinty free DB connect Details

// $host='sql111.epizy.com:3306';
// $username='epiz_28492601';
// $password='M351OeVmZO';
// $database='epiz_28492601_avs_enter_online';

// localhost DB connect Details

// $host='localhost';
// $username='root';
// $password='';
// $database='blood';



$conn=mysqli_connect($host,$username,$password,$database);
if(mysqli_connect_error())
{   
    echo "cannot connect DB";
}
else{
    // echo "sus";
}
?>