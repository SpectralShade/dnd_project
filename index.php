<?php 
include_once('db/db_connection.php');

$sql = "SELECT * FROM `settlements`";
$result = $db->query($sql);

if ($result instanceof mysqli_result) {
    $settlements_array = $result->fetch_all(MYSQLI_ASSOC);
}


$sql = "SELECT * FROM `store_types`";
$result = $db->query($sql);

if ($result instanceof mysqli_result) {
    $store_types_array = $result->fetch_all(MYSQLI_ASSOC);
}

foreach ($settlements_array as $settlement) { #Loop on the settlements_array - getting each element in the settlement variable -  Display settlement Information which is settlement elements
    $name_settlement = $settlement['name'];
    echo ("name " . $name_settlement . '<br>'); 
    $size_settlement = $settlement['size'];
    echo ("Size " . $size_settlement . '<br>');
    $id_settlement = $settlement['id'];
    echo ("ID " . $id_settlement . '<br>');    

    foreach ($store_types_array as $store_type) { # Loop store_Types_array - getting each element in the storetype variable(DB) - 
        $name_storetype = $store_type['name'];
        $id_store_type = $store_type["id"];
        echo ("storetypename " . $name_storetype . '<br>');  # Display Storetype name - 
        $chance_appear_in_settlement = $store_type['appear_chance_size_' . $size_settlement];  # we Dynamicly access the appear chance size column depending on the settlement size 
        echo ("chance_appear_settlement_number " . $chance_appear_in_settlement . '<br>');    
        $dice_roll = rand(1, 100);
        echo ("dice_roll_number " . $dice_roll . '<br>');
        # if roll dice is lower or equal then $chance_appear_in_settlement -> use that store type
        
        if ($dice_roll <= $chance_appear_in_settlement) {
            echo ("this store should appear <br>");
            $storename = ($name_settlement . $name_storetype);
            $sql = "INSERT INTO `stores` (`name`, `store_type_id`, `settlement_id`) VALUES ('$storename', '$id_store_type', '$id_settlement')"; 
            $result = $db->query($sql);   
        }
        else {
            echo (" this store should not appear <br>");
            
        }
    }
}






?>


