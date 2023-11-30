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
	   <nav>Delete Shipment Records</nav>
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
                      echo ("Please Enter minimum of one delete criteria");
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
			$sqlEmp="DELETE FROM SHIPMENT WHERE   $whereBlock ; " ;
			//Execute query
			#echo $sqlEmp;
			#echo '<br>';
			if ($conn->query($sqlEmp) == TRUE)  # or die('Could not run query: '.$conn->error);
			{
				// output data of each row
				echo '<br>';
				echo $sqlEmp;
				echo '<br>';
				echo "Shipment Record Deleted";
			}
			else
			{
			        echo '<br>';
				echo "Shipment Record Not Found for Deletion";
			}
			$conn->close();
		?>
	</body>
	<form>
	         <br><br>
		 <button type="submit" formaction="RemoveShipment.php">Remove Shipment Record</button>
		 <button type="submit" formaction="MainMenu.php">Main Page</button>
	 
        </form>
</html>

