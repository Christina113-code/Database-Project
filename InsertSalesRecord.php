<!DOCTYPE html>
<html lang="en">
	<head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Baseball Card Database</title>
            <link rel="stylesheet" href="styles.css">
	</head>
        <header>
           <h1>Baseball Card Database</h1>
        </header>
               <nav>Insert Sales Records</nav>
	<body>
		<?php

		include ("ConnectBaseBallCardDB.php");

		$customerID=$_GET["customeridField"];
		$dateSold=$_GET["dateSold"];
		$itemID=$_GET["itemID"];
		$paymentType=$_GET["paymentType"];
		$soldPrice=$_GET["soldPrice"];

		$sql = "INSERT INTO Sales_Record VALUES('$itemID', '$customerID', $soldPrice, '$dateSold','$paymentType' );";

		if ($conn->query($sql) == TRUE)
		{
		    echo "New record created successfully";
	#	    include ("SelectSalesRecord.php");
		} else
		{
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    $conn->close();
		}


		?>
		<form>
		      <br><br>
		      <button type="submit" formaction="SearchSalesRecord.php">Search Sales Records</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>
		</form>
	</body>
</html>
