<?php
include_once("config.php");
?>



<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Add script</title>
</head>
<body>
<?php
include_once("config.php");

if( isset($_POST['Submit'])){
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$iso = mysqli_real_escape_string($mysqli, $_POST['iso']); 
	$name = mysqli_real_escape_string($mysqli, $_POST['name']); 
	$nicename = mysqli_real_escape_string($mysqli, $_POST['nicename']); 
	$iso3 = mysqli_real_escape_string($mysqli, $_POST['iso3']); 
	$numcode = mysqli_real_escape_string($mysqli, $_POST['numcode']); 
	$phonecode = mysqli_real_escape_string($mysqli, $_POST['phonecode']); 

	if(empty($id) || empty($iso) || empty($name) || empty($nicename) || empty($iso3) || empty($numcode) || empty($phonecode)){

		if(empty($id)){
			echo "<font color='red'> id field is empty. </font><br/>";
		}
		if(empty($iso)){
			echo "<font color='red'> iso field is empty. </font><br/>";
		}
		if(empty($name)){
			echo "<font color='red'> name field is empty. </font><br/>";
		}
		if(empty($nicename)){
			echo "<font color='red'> nicename field is empty. </font><br/>";
		}
		if(empty($iso3)){
			echo "<font color='red'> iso3 field is empty. </font><br/>";
		}
		if(empty($numcode)){
			echo "<font color='red'> numcode field is empty. </font><br/>";
		}
		if(empty($phonecode)){
			echo "<font color='red'> phonecode field is empty. </font><br/>";
		}
	} else {
		$result = mysqli_query($mysqli, "INSERT INTO country(id, iso, name, nicename, iso3, numcode, phonecode) VALUES ('$id', '$iso', '$name', '$nicename', '$iso3', '$numcode', '$phonecode')");
		echo "<font color='green'> Data added Successfully.";
		echo "<br/><a href='lesson1.php'> View Result </a>";
	}
}
?>

</body>
</html>