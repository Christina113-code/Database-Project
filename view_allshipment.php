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
               <nav>View All Shipments</nav>
	<body>
		<?php

		include ("ConnectBaseBallCardDB.php");


		//Create query
		$sqlEmp="SELECT shipment_id, pickup_location, destination, item_id, supplier_id, transportation_type, date_shipped FROM SHIPMENT;" ;
		//Execute query
		$result = $conn->query($sqlEmp) or die('Could not run query: '.$conn->error);

		if ($result->num_rows > 0) {
			// output data of each row
			echo "<table border='1'> ";
			echo "<tr>
						<th> Shipment Id </th>
						<th> Pickup Location </th>
						<th> Destination </th>
						<th> Item Id </th>
						<th> Supplier</th>
						<th> Transportation Type </th>
						<th> Date Shipped </th>
					
				  </tr>";
			while($row = $result->fetch_assoc()) {
				echo "<tr>".
							"<td>".$row["shipment_id"]."</td>".
							"<td>".$row["pickup_location"]. "</td>".
							"<td>".$row["destination"]."</td>".
							"<td>".$row["item_id"]."</td>".
							"<td>".$row["supplier_id"]."</td>".
							"<td>".$row["transportation_type"]."</td>".							
							"<td>".$row["date_shipped"]."</td>".							
							
				     "</tr>";
			}
			echo "</table>";
		} else {
				echo "0 results";
		}
		$conn->close();

		?>
		     <form>
                     <br><br><br>
		      <button type="submit" formaction="Searchshipment.php">Search Shipment Records</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>

		      </form>
	</body>
</html>
