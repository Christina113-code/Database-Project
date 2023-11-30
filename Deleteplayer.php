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
	   <nav>Delete Player Records</nav>
		<?php
                 
		include ("ConnectBaseBallCardDB.php");
                $whereBlock="";

		$player_id=$_GET["player_id"];
		$first_name=$_GET["first_name"];
		$last_name=$_GET["last_name"];
		$RBIs=$_GET["RBIs"];
		$home_runs=$_GET["home_runs"];
		$shirt_number=$_GET["shirt_number"];
		$team_id = "";
		

		if (empty($player_id)     &&
                    empty($first_name)    &&
                    empty($last_name)     &&
                    empty($RBIs)          &&
                    empty($home_runs)     &&
                    empty($team_id)
                   )
                   {
                      echo ("Please Enter minimum of one delete criteria");
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
			$sqlEmp="DELETE FROM PLAYER WHERE   $whereBlock ; " ;
			//Execute query
			#echo $sqlEmp;
			#echo '<br>';
			if ($conn->query($sqlEmp) == TRUE)  # or die('Could not run query: '.$conn->error);
			{
				// output data of each row
				echo '<br>';
				echo $sqlEmp;
				echo '<br>';
				echo "Player Record Deleted";
			}
			else
			{
			        echo '<br>';
				echo "Player Record Not Found for Deletion";
			}
			$conn->close();
		?>
	</body>
	<form>
	         <br><br>
		 <button type="submit" formaction="RemovePlayer.php">Remove Player Record</button>
		 <button type="submit" formaction="MainMenu.php">Main Page</button>
	 
        </form>
</html>

