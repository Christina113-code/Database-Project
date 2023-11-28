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
                   $whereBlock=  $whereBlock . ' card_id    = ' . '\''   . $cardID  . '\''; 

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
                   $whereBlock=  $whereBlock . ' current_value     = '   . '\''   . $currentValue      . '\''; 
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
                   $whereBlock=  $whereBlock . ' grade = '   . '\''   .$grade . '\''; 
                }
                if (!empty($supplierID))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' supplier_id = '   . '\''   . $supplierID . '\''; 
                }

			//Create query
			$sqlEmp="SELECT card_id, serial_number, current_value, manufactured_date,  grade, supplier_id  FROM BASEBALLCARD WHERE   $whereBlock ; " ;
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
						<th> Card Id </th>
						<th> Serial Number </th>
						<th> Current Value </th>
						<th> Manufactured Date </th>
						<th> Grade </th>
						<th> Supplier Id </th>

					  </tr>";
				while($row = $result->fetch_assoc())
				{
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
		 <button type="submit" formaction="Searchbaseball_card.php">Return to Search</button>
		 <button type="submit" formaction="MainMenu.php">Main Page</button>
	 
        </form>
</html>

