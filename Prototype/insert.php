<?php
$host= "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";

 $conn = mysqli_connect ($host, $dbusername, $dbpassword, $dbname);
 if(!$conn)
 {
    die("failed:" .mysqli_connect_error());
 }
if(isset($_POST['form']));
		
    $productNumber = $_POST['productNumber'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $unitPrice = $_POST['unitPrice'];
    $supplierID = $_POST['supplierID'];


     $sql = "INSERT INTO inventory (productNumber, description, quantity, unitPrice, supplierID) VALUES ('$productNumber', '$description', '$quantity', '$unitPrice', '$supplierID')";

     if(mysqli_query($conn,$sql_query))
     {
        echo "saved";
     }
     else
     {
        echo"error:" .$sql ."" .mysqli_error($conn);
     }
     mysqli_close($conn);
 }
?>