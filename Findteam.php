<!DOCTYPE html>
<html lang="en">
	<head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Baseball Card Database</title>
            <link rel="stylesheet" href="styles.css">
	</head>
	<body>
       <header>
           <h1>Baseball Card Database</h1>
       </header>

		<?php
                 
		include ("ConnectBaseBallCardDB.php");

                $whereBlock="";

		$team_id=$_GET["team_id"];
		$team_name=$_GET["team_name"];
		$num_players=$_GET["num_players"];
		$manager=$_GET["manager"];
		$league=$_GET["league"];
		$world_series=$_GET["world_series"];

		if (empty($team_id)        &&
                    empty($team_name)      &&
                    empty($num_players)    &&
                    empty($manager)        &&
                    empty($league)         &&
                    empty($world_series)
                   )
                   {
                      echo ("Please Enter minimum of one search criteria");
                      exit();
                   }

                if (!empty($team_id))
                   $whereBlock=  $whereBlock . ' team_id    = ' . '\''   . $team_id . '\''; 

                if (!empty($team_name))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';
                   $whereBlock=  $whereBlock . ' team_name    = '   . '\''   . $team_name . '\''; 
                }
                if (!empty($num_players))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' num_players     =  ' .  $num_players  ; 
                }
                if (!empty($manager))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' manager = '  . '\''  .  $manager  . '\''; 
                   
                }
                if (!empty($league))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' league = '  . '\''  . $league   . '\''; 
                }
                if (!empty($world_series))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' world_series =  ' . $world_series ; 
                }

			//Create query
			$sqlEmp="SELECT team_id, team_name , num_players, manager, league ,  world_series FROM TEAM WHERE   $whereBlock ; " ;
			//Execute query
			//echo $sqlEmp;
			//echo '<br>';
			$result = $conn->query($sqlEmp) or die('Could not run query: '.$conn->error);



			if ($result->num_rows > 0)
			{
				// output data of each row
				echo "<nav> Team Records </nav>";
				echo "<table border='1'> ";
				echo "<tr>
						<th> Team Id </th>
						<th> Team Name </th>
						<th> Players </th>
						<th> Manager </th>
						<th> League </th>
						<th> World Series Wins </th>

			              </tr>";
				while($row = $result->fetch_assoc())
				{
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
			}
			else
			{
					echo "0 results";
			}
			$conn->close();
		?>
	</body>
	<form>
	         <br><br>
		 <button type="submit" formaction="Searchteam.php">Return to Search</button>
		 <button type="submit" formaction="MainMenu.php">Main Page</button>
	 
        </form>
</html>

