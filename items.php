<?php
    $apiUrl ="http://192.168.12.155:5000/items";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    $result = json_decode($response, true);
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
            print_r($result)
        ?>
</body>
</html>
