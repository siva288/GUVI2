<html>
    <head>
    <link rel="stylesheet" href="/GUVI2/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="/GUVI2/javascript/edit.js"></script>
    </head>
    <body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php
$host="localhost";
$temp=0;
$user="root";
$pass="";
$db="guvi";
$con=mysqli_connect($host,$user,$pass,$db);
if(!$con){
    echo "error in database connection";
}else{
    $id=$_GET["id"];
    $result="SELECT * FROM data WHERE id=$id";
    $get=mysqli_query($con,$result);
    while($row=mysqli_fetch_assoc($get)){
        $temp=$row["id"];
        echo "
        <div calss='container' id='show'>
            <div class='row'>
                <div class='col-6 col-sm-6 col-md-6 col-lg-6'>
        <table class='table'>
        <tr><h1>My Profile</h1>
        </tr>
        <tr>
            <th>NAME</th>
        </tr>
        <tr>
            <th>USERNAME</th>
        </tr>
        <tr>
            <th>DOB</th>
        </tr>
        <tr>
        <th>MOBILE NUMBER</th>
        </tr>
        <tr>
        <th>LOCATION</th>
        </tr>
        </table>
        </div>
        <div class='col-6 col-sm-6 col-md-6 col-lg-6' id='table1'>
        <table class='table' >
        <tr>
            <h1 id='tables'>Details</h1>
        </tr>
        <tr>
            <td>".$row["name"]."</td>
        </tr>
        <tr>
            <td>".$row["username"]."</td>
        </tr>
        <tr>
            <td>".$row["dob"]."</td>
        </tr>
        <tr>
            <td>".$row["mobile"]."</td>
        </tr>
        <tr>
            <td>".$row["location"]."</td>
        </tr>
        <tr>
        <td><button id='editbutton' onclick='hide()' class='btn btn-primary'>Edit</buttom></td>
        </tr>
        </table>
        
        </div>";
    }
}
    ?>
    <div class='col-6 col-sm-6 col-md-6 col-lg-6 tables' id='table2'>
        <table class='table'  >
            <tr>
                <h1 id='tables'>Update</h1>
            </tr>
            <tr>
                <td><input type="text" name="name" placeholder="Name"  value="" id="nameid"></td>
            </tr>
            <tr>
                <td><input type="text" name="username" placeholder="Username" id="usernameid"></td>
            </tr>
            <tr>
                <td><input type="date" name="dob"  id="dobid"></td>
            </tr>
            <tr>
                <td><input type="number" name="number" placeholder="Mobile Number"  id="numberid"></td>
            </tr>
            <tr>
            <td><input type="text" name="location" placeholder="Location"  id="locationid"></td>
            </tr>
            <tr>
                <td><button class="btn btn-success" onclick="edit(<?php echo $temp ?>)" id="editbutton">Update</button></td>
            </tr>
        </table>
        
    </div>
</div>
</div>
</div>
        </div>
</body>
</html>