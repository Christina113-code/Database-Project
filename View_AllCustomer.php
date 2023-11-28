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
               <nav>View Customer Records</nav>
	<body>
		<?php

		include ("ConnectBaseBallCardDB.php");

		//Create query
		$sqlEmp="SELECT customerID, name, address, city, state, postal, email FROM CUSTOMER ; " ;
		//Execute query
		$result = $conn->query($sqlEmp) or die('Could not run query: '.$conn->error);

		if ($result->num_rows > 0) {
			// output data of each row
				echo "<table border='1'> ";
				echo "<tr>
						<th> Customer ID </th>
						<th> Name </th>
						<th> Address </th>
						<th> City </th>
						<th> State </th>
						<th> Postal </th>
						<th> Email </th>

					  </tr>";
				while($row = $result->fetch_assoc())
				{
					echo "<tr>".
								"<td>".$row["customerID"]."</td>".
								"<td>".$row["name"]. "</td>".
								"<td>".$row["address"]."</td>".
								"<td>".$row["city"]."</td>".
								"<td>".$row["state"]."</td>".
								"<td>".$row["postal"]."</td>".							
								"<td>".$row["email"]."</td>".							
								
					     "</tr>";
				}
				echo "</table>";
		} else
		{
				echo "0 results";
		}
		$conn->close();

		?>
		     <form>
                     <br><br><br>
		      <button type="submit" formaction="SearchCustomer.php">Search Customer Records</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>

		      </form>
	</body>
</html>
