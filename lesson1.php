<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM country");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<h1> <?php echo "my crud app"; ?></h1>

<a href="add.html">add new data</a></br></br>

<table>
<tr bgcolor = '#cccccc'>
  <td>id</td>
  <td>iso</td>
  <td>name</td>
  <td>nicename</td>
  <td>iso3</td>
  <td>numcode</td>
  <td>phonecode</td>
  <td>created_at</td>
  <td>update</td>
</tr>



<?php
while($res = mysqli_fetch_array($result)){
  echo "<tr>";
  echo "<td>" .$res['id']. "</td>";
  echo "<td>" .$res['iso']. "</td>";
  echo "<td>" .$res['name']. "</td>";
  echo "<td>" .$res['nicename']. "</td>";
  echo "<td>" .$res['iso3']. "</td>";
  echo "<td>" .$res['numcode']. "</td>";
  echo "<td>" .$res['phonecode']. "</td>";
  echo "<td>" .$res['created_at']. "</td>";
 echo "<td><a href=\"edit.php?id=$res[id]\">edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('are you sure to delete this record?')\">Delete</a></td>";
 echo "</tr>";
}

?>

</table>
</body>
</html>