<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Get Sales Record</title>
		<link rel="stylesheet" type="text/css" href="321BaseBallStyle.css">
		<meta charset="utf-8">
	</head>
	<body>
		<img src="bballBackground.jpg"  width="200" height="200" align=center> 
	
		<?php

		include ("ConnectBaseBallCardDB.php");

		//Create query
		$sqlEmp="SELECT customerID, dateSold, item_id, paymentType, soldPrice FROM sales_record;" ;
		//Execute query
		$result = $conn->query($sqlEmp) or die('Could not run query: '.$conn->error);

		if ($result->num_rows > 0) {
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
			while($row = $result->fetch_assoc()) {
				echo "<tr>".
							"<td>".$row["customerID"]."</td>".
							"<td>".$row["dateSold"]. "</td>".
							"<td>".$row["item_id"]."</td>".
							"<td>".$row["paymentType"]."</td>".
							"<td>".$row["soldPrice"]."</td>".							
				     "</tr>";
			}
			echo "</table>";
		} else {
				echo "0 results";
		}
		$conn->close();

		?>
               <br><br><br>
                   <b>Insert New Sales Record</b>
		      <form method="get" action="InsertSalesRecord.php">
                     <tr>
                     <br>
                     
		     <td>Customer Id:
			  <input type="text" name="customeridField"  >
		     </td>

		     <td>Date Sold:
			  <input type="text" name="dateSold"  ID="nf">
		     </td>

		     <td>Item ID:
			  <input type="text" name="itemID"  ID="nf">
		     </td>

		     <td>Payment Type:
			  <input type="text" name="paymentType"  ID="nf">
		     </td>

		     <td>Sold Price:
			  <input type="text" name="soldPrice"  ID="nf">
		     </td>
                     </tr>
                     <br><br><br>
		      <input type="submit">
		      <button type="submit" formaction="SearchSalesRecord.php">Search Sales Records</button>
		      </form>



<br><br><br>

	</body>
</html>
