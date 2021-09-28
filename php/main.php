<?php
$host="localhost";
$user="root";
$password="";
$db="guvi";

$con=mysqli_connect($host,$user,$password,$db);
if(!$con){
    echo "Error occur in Database Connection";

}else{
    echo "Database connected successfully ";
    $name=$_POST["name"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $dob=$_POST["dob"];
    $no=$_POST["no"];
    $location=$_POST["location"];
    $insert="insert into data (name,username,password,dob,mobile,location) values('$name','$username','$password','$dob',$no,'$location')";
   if(mysqli_query($con,$insert)){
       echo "data inserted successfully";
   }else{
       echo "Error in data insertion";
   }
}

?>