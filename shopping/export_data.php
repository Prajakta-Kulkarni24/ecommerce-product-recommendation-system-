<?php
include('includes/config.php');

$file = fopen("user_behavior.csv", "w");

// CSV header (must match Python code)
fputcsv($file, ['product_id','product_name','price','image']);

$qry = mysqli_query($con, "SELECT id, productName, productPrice, productImage1 FROM products");

while ($row = mysqli_fetch_assoc($qry)) {
    fputcsv($file, [
        $row['id'],
        $row['productName'],
        $row['productPrice'],
        $row['productImage1']
    ]);
}

fclose($file);

echo "user_behavior.csv generated successfully";
?>