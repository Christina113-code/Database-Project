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
		$player_id=$_GET["player_id"];
		$first_name=$_GET["first_name"];
		$last_name=$_GET["last_name"];
		$RBIs=$_GET["RBIs"];
		$home_runs=$_GET["home_runs"];
		$shirt_number=$_GET["shirt_number"];


		if (empty($player_id)         &&
                    empty($first_name)        &&
                    empty($last_name)         &&
                    empty($RBIs)              &&
                    empty($home_runs)         &&
                    empty($shirt_number)
                   )
                   {
                      echo ("Please Enter minimum of one search criteria");
                      exit();
                   }

                if (!empty($player_id))
                   $whereBlock=  $whereBlock . ' player_id    = ' . '\''   . $player_id  . '\''; 

                if (!empty($first_name))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';
                   $whereBlock=  $whereBlock . ' first_name    = '   . '\''   . $first_name   . '\''; 
                }
                if (!empty($last_name))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' last_name     = '   . '\''   . $last_name      . '\''; 
                }
                if (!empty($RBIs))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                 #  $whereBlock=  $whereBlock . ' RBIs = '   . '\''   . $RBIs . '\''; 
                   $whereBlock=  $whereBlock . ' RBIs = '   .  $RBIs ; 
                   
                }
                if (!empty($home_runs))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' home_runs= '  . $home_runs ; 
                }
                if (!empty($shirt_number))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' shirt_number = '   . $shirt_number; 
                }

			//Create query
			$sqlEmp="SELECT player_id, first_name,  last_name ,  RBIs ,  home_runs, shirt_number  FROM PLAYER WHERE   $whereBlock ; " ;
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
						<th> RBIs </th>
						<th> Home Runs</th>
						<th> Shirt # </th>

					  </tr>";
				while($row = $result->fetch_assoc())
				{
					echo "<tr>".
								"<td>".$row["player_id"]."</td>".
								"<td>".$row["first_name"]. "</td>".
								"<td>".$row["last_name"]."</td>".
								"<td>".$row["RBIs"]."</td>".
								"<td>".$row["home_runs"]."</td>".
								"<td>".$row["shirt_number"]."</td>".							
								
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
		 <button type="submit" formaction="Searchplayer.php">Return to Search</button>
		 <button type="submit" formaction="MainMenu.php">Main Page</button>
	 
        </form>
</html>

