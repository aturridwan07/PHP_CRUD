<?php
    include("database.php");
    class ProductsCrud extends Database{
        protected $tableName = "products";
        protected $primaryKey = "productID";

        public function __construct(){
            parent::connect_db();
        }
        public function getAllData(){
            $query = "SELECT * FROM {$this->tableName}";
            $sql = mysqli_query($this->connection,$query);
            while($row=mysqli_fetch_array($sql)){
                $data[] = $row;
            }
            return $data;
        }
    }
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>Product ID</th><th>Product Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $items = new ProductsCrud();
                foreach($items->getAllData() as $item){
                    echo "<tr>";
                    echo "<td>".$item['productID']."</td>";
                    echo "<td>".$item['productName']."</td>";
                // $total = $row['itemPRX']*$row['SKU'];
                echo "</tr>";
                }
            ?>
        </tbody>
    </table>