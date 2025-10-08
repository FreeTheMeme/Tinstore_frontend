<?php
    //get data from API
    $apiUrl ="192.168.122.73:5002/items";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    $result = json_decode($response, true);
    //check if there are items
    if (array_key_exists('items', $result)) {
        $table = "";
        $items = $result['items'];
        $result_count = count($items);
        $column_names = ['barcode','date_added','name','notes','sold','value'];         
        
        //table test
        $table .= "<table>";
        
        //table h rows
        $table .= " <tr>";

        //table headers
        for ($i = 0; $i < count($column_names); $i++) {
        $table .= " <th>";
        $table .= $column_names[$i];
        $table .= "</th>";
        }
        $table .= "</tr>";
        for ($i = 0; $i < $result_count; $i++) {
		//table cells
		$table .= " <tr>";
		for($j = 0; $j < count($column_names); $j++){
			$table .= "<td>";
	    		$table .= $items[$i][$column_names[$j]];
			$table .= "</td>";
		}
		$table .= "</tr>";
        }
        $table .= "";
	$table .= "</table>";
    } else {
        // do something to inform user that ther is a null/empty array returned from the backend
        $table = "there are no items";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items</title>
</head>
<body>
<a href="index.php">home</a> |
<a href="create_item.php">create item</a> |
<a href="items.php">items</a> |
<a href="edit.php">edit</a>
   <h1>Items</h1> 
        <?php
    		echo($table);
        ?>
</body>
</html>
