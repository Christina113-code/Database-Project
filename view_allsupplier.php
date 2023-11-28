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
               <nav>View All Suppliers</nav>
	<body>
		<?php

		include ("ConnectBaseBallCardDB.php");


		//Create query
		$sqlEmp="SELECT supplier_id, name, address, card_purchased_price, date_purchased, card_id, shipment_id FROM SUPPLIER;" ;
		//Execute query
		$result = $conn->query($sqlEmp) or die('Could not run query: '.$conn->error);

		if ($result->num_rows > 0) {
			// output data of each row
			echo "<table border='1'> ";
			echo "<tr>
						<th> Supplier Id </th>
						<th> Name </th>
						<th> Address </th>
						<th> Purchase Price </th>
						<th> Date Purchased</th>
						<th> Card ID </th>
						<th> Shipment ID </th>
					
				  </tr>";
			while($row = $result->fetch_assoc()) {
				echo "<tr>".
							"<td>".$row["supplier_id"]."</td>".
							"<td>".$row["name"]. "</td>".
							"<td>".$row["address"]."</td>".
							"<td>".$row["card_purchased_price"]."</td>".
							"<td>".$row["date_purchased"]."</td>".
							"<td>".$row["card_id"]."</td>".							
							"<td>".$row["shipment_id"]."</td>".							
							
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
		      <button type="submit" formaction="MainMenu.php">Main Page</button>

		      </form>
	</body>
</html>
