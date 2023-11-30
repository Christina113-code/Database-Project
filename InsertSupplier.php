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
               <nav>Insert Supplier Records</nav>
	<body>
		<?php

		include ("ConnectBaseBallCardDB.php");

		$supplier_id=$_GET["supplier_id"];
		$name=$_GET["name"];
		$address=$_GET["address"];
		$card_purchased_price=$_GET["card_purchased_price"];
		$date_purchased=$_GET["date_purchased"];
		$card_id=$_GET["card_id"];
                $shipment_id=$_GET["shipment_id"];

		$sql = "INSERT INTO SUPPLIER VALUES( '$supplier_id', '$name', '$address', $card_purchased_price, '$date_purchased', $card_id, $shipment_id );";

		if ($conn->query($sql) == TRUE)
		{
		    echo "<br><br>";
		    echo "New Supplier record created successfully";
		} else
		{
		    echo "<br><br>";
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    $conn->close();
		}
		?>
		<form>
		      <br><br>
		      <button type="submit" formaction="Searchsupplier.php">Search Supplier Records</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>
		</form>
	</body>
</html>
