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
               <nav>View All Baseball Card Records</nav>
	<body>
		<?php

		include ("ConnectBaseBallCardDB.php");

		//Create query
		$sqlEmp="SELECT card_id, serial_number, current_value, manufactured_date, grade, supplier_id FROM BASEBALLCARD;" ;
		//Execute query
		$result = $conn->query($sqlEmp) or die('Could not run query: '.$conn->error);

		if ($result->num_rows > 0) {
			// output data of each row
			echo "<table border='1'> ";
			echo "<tr>
						<th> Card Id </th>
						<th> Serial Number </th>
						<th> Current Value </th>
						<th> Manufactured Date </th>
						<th> Grade </th>
						<th> Supplier Id </th>					
				  </tr>";
			while($row = $result->fetch_assoc()) {
				echo "<tr>".
								"<td>".$row["card_id"]."</td>".
								"<td>".$row["serial_number"]. "</td>".
								"<td>".$row["current_value"]."</td>".
								"<td>".$row["manufactured_date"]."</td>".
								"<td>".$row["grade"]."</td>".
								"<td>".$row["supplier_id"]."</td>".							
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
		      <button type="submit" formaction="Searchballball_card.php">Search BaseBall Card Records</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>

		      </form>
	</body>
</html>
