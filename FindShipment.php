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
		$date_shipped=$_GET["date_shipped"];
		$destination=$_GET["destination"];
		$item_ID=$_GET["item_id"];
		$pickup_location=$_GET["pickup_location"];

		if (empty($item_ID) &&
                    empty($dateSold)   &&
                    empty($itemID)     &&
                    empty($paymentType)
                   )
                   {
                      echo ("Please Enter Search Criteria");
                      exit();
                   }

                if (!empty($item_ID))
                   $whereBlock=  $whereBlock . ' item_i$item_ID   = ' . '\''   . $item_ID  . '\''; 
                if (!empty($dateSold))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';
                   $whereBlock=  $whereBlock . ' dateSold    = '   . '\''   . $dateSold    . '\''; 
                }
                if (!empty($itemID))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' item_ID      = '   . '\''   . $itemID      . '\''; 
                }
                if (!empty($paymentType))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' paymentType = '   . '\''   . $paymentType . '\''; 
                }

			//Create query
			$sqlEmp="SELECT item_i$item_ID, dateSold, item_id, paymentType, soldPrice FROM sales_record WHERE   $whereBlock ; " ;
			//Execute query
			#echo $sqlEmp;
			#echo '<br>';
			$result = $conn->query($sqlEmp) or die('Could not run query: '.$conn->error);

			if ($result->num_rows > 0)
			{
				// output data of each row
				echo "<nav> Sales Records </nav>";
				echo "<table border='1'> ";
				echo "<tr>
						<th> Customer ID </th>
						<th> Date Sold </th>
						<th> Item ID </th>
						<th> Payment Type </th>
						<th> Sold Price </th>

					  </tr>";
				while($row = $result->fetch_assoc())
				{
					echo "<tr>".
								"<td>".$row["item_i$item_ID"]."</td>".
								"<td>".$row["dateSold"]. "</td>".
								"<td>".$row["item_id"]."</td>".
								"<td>".$row["paymentType"]."</td>".
								"<td>".$row["soldPrice"]."</td>".							
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
		 <button type="submit" formaction="SearchSalesRecord.php">Return to Search</button>
	       <!-- <button type="submit" formaction="SelectSalesRecord.php">Insert New Sales Records</button> -->
		 <button type="submit" formaction="MainMenu.php">Main Page</button>
	 
        </form>
</html>

