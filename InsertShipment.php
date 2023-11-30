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
               <nav>Insert Shipment Records</nav>
	<body>
		<?php

		include ("ConnectBaseBallCardDB.php");

		$shipment_id=$_GET["shipment_id"];
		$pickup_location=$_GET["pickup_location"];
		$destination=$_GET["destination"];
		$item_id=$_GET["item_id"];
		$supplier_id=$_GET["supplier_id"];
		$transportation_type=$_GET["transportation_type"];
                $date_shipped=$_GET["date_shipped"];

		$sql = "INSERT INTO SHIPMENT VALUES( '$shipment_id', '$pickup_location', '$destination', $item_id, '$supplier_id', '$transportation_type', '$date_shipped' );";

		if ($conn->query($sql) == TRUE)
		{
		    echo "<br><br>";
		    echo "New Shipment record created successfully";
		} else
		{
		    echo "<br><br>";
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    $conn->close();
		}
		?>
		<form>
		      <br><br>
		      <button type="submit" formaction="Searchshipment.php">Search Shipment Records</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>
		</form>
	</body>
</html>
