<?php
    include("database.php");

    $sql_query = "SELECT * FROM products";
    $result = mysqli_query($conn,$sql_query);
?>
<table border="1">
    <thead>
        <tr>
            <th>Product ID</th><th>Product Name</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($row =mysqli_fetch_assoc($result)){
                $productID = $row['productID'];
                echo "<tr>";
                    echo "<td>".$productID."</td>";
                    echo "<td>".$row['productName']."</td>";
                   // $total = $row['itemPRX']*$row['SKU'];
                echo "</tr>";
            }
        ?>
    </tbody>
</table>