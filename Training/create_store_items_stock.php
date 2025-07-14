<?php
include_once('../db/db_connection.php');

$sql = "SELECT * FROM `item_types`";
$result = $db->query($sql);

if ($result instanceof mysqli_result) {
    $item_types_Array = $result->fetch_all(MYSQLI_ASSOC); 
}

$sql = "SELECT * FROM `store_item_stock`";
$result =$db->query($sql);

if ($result instanceof mysqli_result) {
    $store_item_stock_Array = $result->fetch_all(MYSQLI_ASSOC);
}

$sql = "SELECT * FROM `stores`";
$result =$db->query($sql);

if ($result instanceof mysqli_result) {
    $stores_array = $result->fetch_all(MYSQLI_ASSOC);
}

foreach ($stores_array as $stores) {
    $name_stores = $stores ["name"];
    echo ("name " . $name_stores . '<br>');
    $store_type_id_stores = $stores ["store_type_id"];
    echo ("store_type_id " . $store_type_id_stores . '<br>');
    $settlement_id = $stores ["settlement_id"];
}

foreach ($item_types_Array as $item_type) {
    $name_item_type = $item_type["name"];
    echo ("name " . $name_item_type . '<br>');
    $price_item_type = $item_type["price"];
    echo ("price " . $price_item_type . '<br>'); 
    $appear_chance_item_type = $item_type["appear_chance"];
    echo ("appear chance " . $appear_chance_item_type . '<br>'); 
    $dice_roll = rand(0, 100);
    echo ("dice roll number " . $dice_roll .  '<br>');
    $dice_roll_quantity = rand(0, 5);
    echo ("dice roll number quantity " . $dice_roll_quantity .  '<br>');      
    
    if ($dice_roll_quantity<= $appear_chance_item_type) {
        echo ("Quantity added");
        $store_stock_id = ($item_type . $stores);
        $sql = "INSERT INTO `store_item_stock` (`id`, `store_id`, `item_type_id`, `quantity`) VALUES (NULL, '$store_stock_id', '$store_type_id_stores', '$dice_roll_quantity')";
    }
    else {
        echo ("no quantity added");
    }
}        

?>