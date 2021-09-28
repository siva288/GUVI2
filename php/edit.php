<?php
$host="localhost";
$user="root";
$password="";
$db="guvi";
echo "Edit Section";
$con=mysqli_connect($host,$user,$password,$db);
if(!$con){
    echo "Error occur in Database Connection";

}else{
    $id=$_POST["id"];
    $page='../GUVI2/php/profile.php?id='.$id;
    $redirect=true;
    $name=$_POST["name"];
    $username=$_POST["username"];
    $dob=$_POST["dob"];
    $no=$_POST["no"];
    $location=$_POST["location"];
    if($name!=""){
        $update="update data set name='$name' where id=$id";
        mysqli_query($con,$update);
    }
    if($username!=""){
        $update="update data set username='$username' where id=$id";
        mysqli_query($con,$update);
    }
    if($dob!=""){
        $update="update data set dob='$dob' where id=$id";
        mysqli_query($con,$update);
    }
    if($no!=""){
        $update="update data set mobile=$no where id=$id";
        mysqli_query($con,$update);
    }
    if($location!=""){
        $update="update data set location='$location' where id=$id";
        mysqli_query($con,$update);
    }
} 
?>