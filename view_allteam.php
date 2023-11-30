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
               <nav>View All Teams</nav>
	<body>
		<?php

		include ("ConnectBaseBallCardDB.php");


		//Create query
		$sqlEmp="SELECT team_id, team_name, num_players, manager, league, world_series FROM TEAM;" ;
		//Execute query
		$result = $conn->query($sqlEmp) or die('Could not run query: '.$conn->error);

		if ($result->num_rows > 0) {
			// output data of each row
			echo "<table border='1'> ";
			echo "<tr>
						<th> Team Id</th>
						<th> Team Name</th>
						<th> Players</th>
						<th> Manager</th>
						<th> League</th>
						<th> World Series Wins</th>
					
				  </tr>";
			while($row = $result->fetch_assoc()) {
				echo "<tr>".
							"<td>".$row["team_id"]."</td>".
							"<td>".$row["team_name"]. "</td>".
							"<td>".$row["num_players"]."</td>".
							"<td>".$row["manager"]."</td>".
							"<td>".$row["league"]."</td>".
							"<td>".$row["world_series"]."</td>".							
							
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
