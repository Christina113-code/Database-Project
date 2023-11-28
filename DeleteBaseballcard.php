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
	   <nav>Delete Baseball Card Records</nav>
		<?php
                 
		include ("ConnectBaseBallCardDB.php");
                $whereBlock="";

		$cardID=$_GET["cardID"];
		$serialNumber=$_GET["serialNumber"];
		$currentValue=$_GET["currentValue"];
		$mfrdDate=$_GET["mfrdDate"];
		$grade=$_GET["grade"];
		$supplierID=$_GET["supplierID"];

		

		if (empty($cardID)         &&
                    empty($serialNumber)   &&
                    empty($currentValue)   &&
                    empty($mfrdDate)       &&
                    empty($grade)          &&
                    empty($supplierID)
                   )
                   {
                      echo ("Please Enter minimum of one search criteria");
                      exit();
                   }

                if (!empty($cardID))
                   $whereBlock=  $whereBlock . ' card_id  = ' . '\''   . $cardID  . '\''; 

                if (!empty($serialNumber))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';
                   $whereBlock=  $whereBlock . ' serial_number    = '   . '\''   . $serialNumber    . '\''; 
                }
                if (!empty($currentValue))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' current_value     = '   .  $currentValue   ; 
                }
                if (!empty($mfrdDate))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' manufactured_date = '   . '\''   . $mfrdDate . '\''; 
                }
                if (!empty($grade))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' grade = '   .  $grade ; 
                }
                if (!empty($supplierID))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' supplier_id = '   .  $supplierID ; 
                }


			//Create query
			$sqlEmp="DELETE FROM BASEBALLCARD WHERE   $whereBlock ; " ;
			//Execute query
			#echo $sqlEmp;
			#echo '<br>';
			if ($conn->query($sqlEmp) == TRUE)  # or die('Could not run query: '.$conn->error);
			{
				// output data of each row
				echo '<br>';
				#echo $sqlEmp;
				echo '<br>';
				echo "BaseBall Card Record Deleted";
			}
			else
			{
			        echo '<br>';
				echo "BaseBall Card Record Not Found for Deletion";
			}
			$conn->close();
		?>
	</body>
	<form>
	         <br><br>
		 <button type="submit" formaction="Removebaseball_card.php">Remove Baseball Card Record</button>
		 <button type="submit" formaction="MainMenu.php">Main Page</button>
	 
        </form>
</html>

