<!DOCTYPE html>
<html lang="en">
    <!-- league (varchar, nullable)
Columnmanager (varchar, nullable)
Columnnum_players (int, nullable)
Columnteam_id (PRI, char)
Columnteam_name (varchar)
Columnworld_series (int, nullable) -->
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
		$manager=$_GET["manager"];
		$name=$_GET["name"];
		$league=$_GET["league"];
		$world_series=$_GET["world_series"];



		if (empty($team_id)         &&
                    empty($manager)        &&
                    empty($name)         &&
                    empty($league)              &&
                    empty($world_series)         &&
                   )
                   {
                      echo ("Please Enter minimum of one search criteria");
                      exit();
                   }

                if (!empty($team_id))
                   $whereBlock=  $whereBlock . ' team_id    = ' . '\''   . $team_id  . '\''; 

                if (!empty($manager))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';
                   $whereBlock=  $whereBlock . ' manager    = '   . '\''   . $manager   . '\''; 
                }
                if (!empty($name))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' name     = '   . '\''   . $name      . '\''; 
                }
                if (!empty($league))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                 #  $whereBlock=  $whereBlock . ' league = '   . '\''   . $league . '\''; 
                   $whereBlock=  $whereBlock . ' league = '   .  $league ; 
                   
                }
                if (!empty($world_series))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' world_series= '  . $world_series ; 
                }
               

			//Create query
			$sqlEmp="SELECT team_id, manager,  name ,  league ,  world_series FROM TEAM WHERE   $whereBlock ; " ;
			//Execute query
			#echo $sqlEmp;
			#echo '<br>';
			$result = $conn->query($sqlEmp) or die('Could not run query: '.$conn->error);



			if ($result->num_rows > 0)
			{
				// output data of each row
				echo "<nav> Baseball Card Records </nav>";
				echo "<table border='1'> ";
				echo "<tr>
						<th> Player Id </th>
						<th> First Name </th>
						<th> Last Name </th>
						<th> league </th>
						<th> Home Runs</th>
						<th> Shirt # </th>

					  </tr>";
				while($row = $result->fetch_assoc())
				{
					echo "<tr>".
								"<td>".$row["team_id"]."</td>".
								"<td>".$row["manager"]. "</td>".
								"<td>".$row["name"]."</td>".
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
		 <button type="submit" formaction="searchteam.php">Return to Search</button>
		 <button type="submit" formaction="MainMenu.php">Main Page</button>
	 
        </form>
</html>

