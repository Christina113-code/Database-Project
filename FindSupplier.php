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

		$supplier_id=$_GET["supplier_id"];
		$name=$_GET["name"];
		$address=$_GET["address"];
		$card_purchased_price=$_GET["card_purchased_price"];
		$date_purchased=$_GET["date_purchased"];
		$card_id=$_GET["card_id"];
                $shipment_id=$_GET["shipment_id"];

		if (empty($supplier_id)            &&
                    empty($name)                   &&
                    empty($address)                &&
                    empty($card_purchased_price)   &&
                    empty($date_purchased)         &&
                    empty($card_id)                &&
                    empty($shipment_id)
                   )
                   {
                      echo ("Please Enter minimum of one search criteria");
                      exit();
                   }

                if (!empty($supplier_id))
                   $whereBlock=  $whereBlock . ' supplier_id    = ' . '\''   . $supplier_id  . '\''; 

                if (!empty($name))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';
                   $whereBlock=  $whereBlock . ' name    = '   . '\''   . $name  . '\''; 
                }
                if (!empty($address))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' address     = '   . '\''   . $address     . '\''; 
                }
                if (!empty($card_purchased_price))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' card_purchased_price = '   .  $card_purchased_price ; 
                   
                }
                if (!empty($date_purchased))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' date_purchased = '  . '\''  . $date_purchased   . '\''; 
                }
                if (!empty($card_id))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' card_id =  ' . $card_id ; 
                }
                if (!empty($shipment_id))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' shipment_id = '  .  $shipment_id ; 
                }

			//Create query
			$sqlEmp="SELECT supplier_id, name, address, card_purchased_price, date_purchased , card_id, shipment_id FROM SUPPLIER WHERE   $whereBlock ; " ;
			//Execute query
			#echo $sqlEmp;
			#echo '<br>';
			$result = $conn->query($sqlEmp) or die('Could not run query: '.$conn->error);



			if ($result->num_rows > 0)
			{
				// output data of each row
				echo "<nav> Supplier Records </nav>";
				echo "<table border='1'> ";
				echo "<tr>
						<th> Supplier Id </th>
						<th> Name </th>
						<th> Address </th>
						<th> Purchase Price </th>
						<th> Date Purchased</th>
						<th> Card ID </th>
						<th> Shipment ID </th>

			              </tr>";
				while($row = $result->fetch_assoc())
				{
					echo "<tr>".
							"<td>".$row["supplier_id"]."</td>".
							"<td>".$row["name"]. "</td>".
							"<td>".$row["address"]."</td>".
							"<td>".$row["card_purchased_price"]."</td>".
							"<td>".$row["date_purchased"]."</td>".
							"<td>".$row["card_id"]."</td>".							
							"<td>".$row["shipment_id"]."</td>".															
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
		 <button type="submit" formaction="Searchsupplier.php">Return to Search</button>
		 <button type="submit" formaction="MainMenu.php">Main Page</button>
	 
        </form>
</html>

