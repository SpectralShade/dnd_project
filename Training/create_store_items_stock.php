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

foreach ($item_types_Array as $item_type) {
    $name_item_type = $item_type["name"];
    echo ("name " . $name_item_type . '<br>');
    $price_item_type = $item_type["price"];
    echo ("price " . $price_item_type . '<br>'); 
    $appear_chance_item_type = $item_type["appear_chance"];
    echo ("appear chance " . $appear_chance_item_type . '<br>'); 

}

?>