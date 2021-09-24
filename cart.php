<?php

// check if session exist
//create session if not exist
//get product details from form post request
//create product array
//add the product array to session





if(isset($_POST['product_name'])) {
    echo $_POST['product_name'];
}


$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
if (!empty($product_array)) { 
	foreach($product_array as $key=>$value){
?>
