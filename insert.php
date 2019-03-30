<?php
    include("database.php");
    //data
    $productID = "P003";
    $productName = "Asus Zenbook";
    //query insert
    $sql_query = "INSERT INTO products VALUE('{$productID}','{$productName}')";
    $result = mysqli_query($conn,$sql_query);
    if($result){
        echo "Data saved";
    }
    else{
        echo "Save data failed ";
    }
?>