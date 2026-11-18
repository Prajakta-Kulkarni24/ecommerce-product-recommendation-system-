<?php

header('Content-Type: application/json');

$product_id = $_GET['product_id'];

// send product_id to python
echo shell_exec("python recommend.py $product_id 2>&1");

?>