<?php
include('config.php');
$catagory=$_COOKIE['catagory'];
$engine= $_COOKIE['engine'];
$type=$_COOKIE['type'];
$minm=$_GET['price-min'];
$maxm=$_GET['price-max'];
$maxm=$maxm*100000;
$minm=$minm*100000;
// search CAR 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
}

$sql = "SELECT link, name, catagory, engine, type , price FROM car WHERE catagory like '$catagory' and engine like '$engine' and type like '$type' and price between '$minm' and '$maxm'";
$result = $conn->query($sql);

echo '<title> Results Gear House </title>
<link rel="stylesheet" href="css/result.css">
<h1 class="header">
  <span class="fname">Gear</span>
  <span class="lname">House</span>
</h1>';
if ($result->num_rows > 0) {
    echo ' <table class="table" summary="Results Table" style="width:100%;">
    <caption>
    Cars Under Your selection
    </caption>
    <thead>
    <tr><th>Car Name</th><th>Category</th><th>Engine </th><th>Car Type</th><th>Car Price</th></tr>
    </thead>';
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "
        <tbody>
        <tr>
        <td><center><a href=".$row["link"].">".$row["name"]."</a></center></td>
        <td><center>".$row["catagory"]."</center> </td>
        <td> <center>".$row["engine"]."</center></td>
        <td> <center>".$row["type"]."</center></td>
        <td> <center>".$row["price"]."</center></td>
        </tr>
        </tbody>";
    }
    echo "
    <tfoot>
      <tr>
        <th >Total : </th>
        <td colspan='4' >$result->num_rows Cars</td>
      </tr>
    </table>";
} else {
    echo ' <table class="table" summary="Sample Table" style="width:100%;">
    <caption>
    Sorry No Cars Found !.
    </caption>
    </table>

    ';
}
$conn->close();
?> 
