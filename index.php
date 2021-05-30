   
<?php

//$user= 'drtwmxruehndqj';
//$pass= '931c3dc4b68ea10fd12c275624cba8fd5e0c58b8f57b04d9c15df26f8d9475c5';
//$db='dba8nuaiilk84b';
 //$server ='ec2-54-155-35-88.eu-west-1.compute.amazonaws.com:5432';
 $server ="localhost";
$user = 'root';$pass = '';$db = 'test heroku';
$con = mysqli_connect($server,$user,$pass,$db); 
echo "Great job ";
?>