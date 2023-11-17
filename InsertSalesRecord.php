<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Insert Sales Record</title>
		<link rel="stylesheet" type="text/css" href="myCss.css">
		<meta charset="utf-8">
	</head>
	<body>
		<?php

		include ("ConnectBaseBallCardDB.php");

		$customerID=$_GET["customeridField"];
		$dateSold=$_GET["dateSold"];
		$itemID=$_GET["itemID"];
		$paymentType=$_GET["paymentType"];
		$soldPrice=$_GET["soldPrice"];

		$sql = "INSERT INTO Sales_Record VALUES('$itemID', '$customerID', $soldPrice, '$dateSold','$paymentType' );";

		if ($conn->query($sql) == TRUE) {
		    echo "New record created successfully";
		    include ("SelectSalesRecord.php");
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    $conn->close();
		}


		?>
	</body>
</html>
