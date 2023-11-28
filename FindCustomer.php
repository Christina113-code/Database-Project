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
		$customerID=$_GET["customeridField"];
		$customerName=$_GET["customerName"];
		$address=$_GET["address"];
		$city=$_GET["city"];
		$state=$_GET["state"];
		$postal=$_GET["postal"];
		$email=$_GET["email"];


		if (empty($customerID)     &&
                    empty($customerName)   &&
                    empty($address)        &&
                    empty($city)           &&
                    empty($state)          &&
                    empty($postal)         &&
                    empty($email) 

                   )
                   {
                      echo ("Please Enter minimum of one search criteria");
                      exit();
                   }

                if (!empty($customerID))
                   $whereBlock=  $whereBlock . ' customerID   = ' . '\''   . $customerID  . '\''; 

                if (!empty($customerName))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';
                   $whereBlock=  $whereBlock . ' name    = '   . '\''   . $customerName    . '\''; 
                }
                if (!empty($address))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' address      = '   . '\''   . $address      . '\''; 
                }
                if (!empty($city))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' city = '   . '\''   . $city . '\''; 
                }
                if (!empty($state))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' state = '   . '\''   . $state . '\''; 
                }
                if (!empty($postal))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' postal = '   . '\''   . $postal . '\''; 
                }
                if (!empty($email))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' email = '   . '\''   . $email . '\''; 
                }

			//Create query
			$sqlEmp="SELECT customerID, name, address, city, state, postal, email FROM CUSTOMER WHERE   $whereBlock ; " ;
			//Execute query
			#echo $sqlEmp;
			#echo '<br>';
			$result = $conn->query($sqlEmp) or die('Could not run query: '.$conn->error);

			if ($result->num_rows > 0)
			{
				// output data of each row
				echo "<nav> Customer Records </nav>";
				echo "<table border='1'> ";
				echo "<tr>
						<th> Customer ID </th>
						<th> Name </th>
						<th> Address </th>
						<th> City </th>
						<th> State </th>
						<th> Postal </th>
						<th> Email </th>

					  </tr>";
				while($row = $result->fetch_assoc())
				{
					echo "<tr>".
								"<td>".$row["customerID"]."</td>".
								"<td>".$row["name"]. "</td>".
								"<td>".$row["address"]."</td>".
								"<td>".$row["city"]."</td>".
								"<td>".$row["state"]."</td>".
								"<td>".$row["postal"]."</td>".							
								"<td>".$row["email"]."</td>".							
								
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
		 <button type="submit" formaction="SearchCustomer.php">Return to Search</button>
	       <!-- <button type="submit" formaction="SelectSalesRecord.php">Insert New Sales Records</button> -->
		 <button type="submit" formaction="MainMenu.php">Main Page</button>
	 
        </form>
</html>

