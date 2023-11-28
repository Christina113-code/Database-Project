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
               <nav>View All Sales Records</nav>
	<body>
		<?php

		include ("ConnectBaseBallCardDB.php");

		//Create query
		$sqlEmp="SELECT customerID, dateSold, item_id, paymentType, soldPrice FROM sales_record;" ;
		//Execute query
		$result = $conn->query($sqlEmp) or die('Could not run query: '.$conn->error);

		if ($result->num_rows > 0) {
			// output data of each row
			echo "<table border='1'> ";
			echo "<tr>
					<th> Customer ID </th>
					<th> Date Sold </th>
					<th> Item ID </th>
					<th> Payment Type </th>
					<th> Sold Price </th>
					
				  </tr>";
			while($row = $result->fetch_assoc()) {
				echo "<tr>".
							"<td>".$row["customerID"]."</td>".
							"<td>".$row["dateSold"]. "</td>".
							"<td>".$row["item_id"]."</td>".
							"<td>".$row["paymentType"]."</td>".
							"<td>".$row["soldPrice"]."</td>".							
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
		      <button type="submit" formaction="SearchSalesRecord.php">Search Sales Records</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>

		      </form>
	</body>
</html>
