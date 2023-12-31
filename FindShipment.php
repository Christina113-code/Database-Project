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

		$shipment_id=$_GET["shipment_id"];
		$pickup_location=$_GET["pickup_location"];
		$destination=$_GET["destination"];
		$item_id=$_GET["item_id"];
		$supplier_id=$_GET["supplier_id"];
		$transportation_type=$_GET["transportation_type"];
                $date_shipped=$_GET["date_shipped"];

		if (empty($shipment_id)         &&
                    empty($pickup_location)     &&
                    empty($destination)         &&
                    empty($item_id)             &&
                    empty($supplier_id)         &&
                    empty($transportation_type) &&
                    empty($date_shipped)
                   )
                   {
                      echo ("Please Enter minimum of one search criteria");
                      exit();
                   }

                if (!empty($shipment_id))
                   $whereBlock=  $whereBlock . ' shipment_id    = ' . '\''   . $shipment_id  . '\''; 

                if (!empty($pickup_location))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';
                   $whereBlock=  $whereBlock . ' pickup_location    = '   . '\''   . $pickup_location   . '\''; 
                }
                if (!empty($destination))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' destination     = '   . '\''   . $destination      . '\''; 
                }
                if (!empty($item_id))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' item_id = '   .  $item_id ; 
                   
                }
                if (!empty($supplier_id))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' supplier_id = '  . '\''  . $supplier_id   . '\''; 
                }
                if (!empty($transportation_type))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' transportation_type = ' . '\''   . $transportation_type . '\''; 
                }
                if (!empty($date_shipped))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' date_shipped = '  . '\'' . $date_shipped . '\''; 
                }

			//Create query
			$sqlEmp="SELECT shipment_id, pickup_location, destination, item_id, supplier_id, transportation_type, date_shipped FROM SHIPMENT WHERE   $whereBlock ; " ;
			//Execute query
			#echo $sqlEmp;
			#echo '<br>';
			$result = $conn->query($sqlEmp) or die('Could not run query: '.$conn->error);



			if ($result->num_rows > 0)
			{
				// output data of each row
				echo "<nav> Shipment Records </nav>";
				echo "<table border='1'> ";
				echo "<tr>
						<th> Shipment Id </th>
						<th> Pickup Location </th>
						<th> Destination </th>
						<th> Item Id </th>
						<th> Supplier</th>
						<th> Transportation Type </th>
						<th> Date Shipped </th>

			              </tr>";
				while($row = $result->fetch_assoc())
				{
					echo "<tr>".
							"<td>".$row["shipment_id"]."</td>".
							"<td>".$row["pickup_location"]. "</td>".
							"<td>".$row["destination"]."</td>".
							"<td>".$row["item_id"]."</td>".
							"<td>".$row["supplier_id"]."</td>".
							"<td>".$row["transportation_type"]."</td>".							
							"<td>".$row["date_shipped"]."</td>".															
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
		 <button type="submit" formaction="Searchshipment.php">Return to Search</button>
		 <button type="submit" formaction="MainMenu.php">Main Page</button>
	 
        </form>
</html>

