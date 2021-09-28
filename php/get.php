<?php
$host="localhost";
$user="root";
$password="";
$db="guvi";
$con=mysqli_connect($host,$user,$password,$db);
$result="SELECT * FROM data";
$get=mysqli_query($con,$result);

$data=array();
while($row=mysqli_fetch_assoc($get)){
    $data[]=$row;
}
echo json_encode($data);
?>