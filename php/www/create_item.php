<?php
$output = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$output = print_r($_POST,true);
}
?>

    
<html>
<body>
<a href="index.php">home</a> |
<a href="create_item.php">create item</a> |
<a href="items.php">items</a> |
<a href="edit.php">edit</a>

<title>Add Item</title>
<h2>Add Item</h2>

<form action="http://tinstore.tail4b8243.ts.net:5002/items" method="POST">

  <label for="name">name:</label><br>
  <input type="text" id="name" name="name" value="name"><br>
  
  <label for="barcode">barcode:</label><br>
  <input type="text" id="barcode" name="barcode" value="12345"><br>
  
  <label for="notes">Value:</label><br>
  <input type="text" id="value" name="value" value="20"><br><br>
  
  <input type="submit" value="Submit">
  
</form> 

<?php
echo "$output";
?>

</body>
</html>
    
