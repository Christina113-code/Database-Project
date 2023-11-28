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
               <nav>View All Player Records</nav>
	<body>
		<?php

		include ("ConnectBaseBallCardDB.php");


		//Create query
		$sqlEmp="SELECT player_id, first_name, last_name, RBIs, home_runs, shirt_number, team_id FROM PLAYER;" ;
		//Execute query
		$result = $conn->query($sqlEmp) or die('Could not run query: '.$conn->error);

		if ($result->num_rows > 0) {
			// output data of each row
			echo "<table border='1'> ";
			echo "<tr>
						<th> Player Id </th>
						<th> First Name </th>
						<th> Last Name </th>
						<th> RBIs </th>
						<th> Home Runs</th>
						<th> Shirt # </th>
						<th> Team Id </th>
					
				  </tr>";
			while($row = $result->fetch_assoc()) {
				echo "<tr>".
							"<td>".$row["player_id"]."</td>".
							"<td>".$row["first_name"]. "</td>".
							"<td>".$row["last_name"]."</td>".
							"<td>".$row["RBIs"]."</td>".
							"<td>".$row["home_runs"]."</td>".
							"<td>".$row["shirt_number"]."</td>".							
							"<td>".$row["team_id"]."</td>".							
							
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
		      <button type="submit" formaction="Searchplayer.php">Search Player Records</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>

		      </form>
	</body>
</html>
