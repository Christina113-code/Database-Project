<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Find Sales Record</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<meta charset="utf-8">
	</head>
	<body>

		<?php

		include ("ConnectBaseBallCardDB.php");
                $whereBlock="";
		$customerID=$_GET["customeridField"];
		$dateSold=$_GET["dateSold"];
		$itemID=$_GET["itemID"];
		$paymentType=$_GET["paymentType"];
                if (!empty($customerID))
                   $whereBlock=  $whereBlock . ' customerID   = ' . '\''   . $customerID  . '\''; 
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
			$sqlEmp="SELECT customerID, dateSold, item_id, paymentType, soldPrice FROM sales_record WHERE   $whereBlock ; " ;
			//Execute query
			echo $sqlEmp;
			echo '<br>';
			$result = $conn->query($sqlEmp) or die('Could not run query: '.$conn->error);

			if ($result->num_rows > 0)
			{
				// output data of each row
				echo "<h2> Sales Records </h2>";
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
								"<td>".$row["customerID"]."</td>".
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
		 <button type="submit" formaction="SelectSalesRecord.php">Insert New Sales Records</button>
		 <button type="submit" formaction="CS620_Assignment_6_FirstForm.html">Main Page</button>
	 
        </form>
</html>

