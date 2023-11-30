<!DOCTYPE html>
<html lang="en">
	<head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Baseball Card Database</title>
            <link rel="stylesheet" href="styles.css">
	</head>
        <header>
           <h1>Baseball Card Database</h1>
        </header>
               <nav>Add Shipments</nav>
	<body>
		 
		      <form method="get" action="InsertShipment.php">
		      <table style="width:100%;">
                     <tr style="width:100%;">
                     <br>
		     <td>Shipment Id
			  <input type="text" name="shipment_id"  >
		     </td>
		     <td>Pickup Location
			  <input type="text" name="pickup_location"  >
		     </td>
		     <td>Destination
			  <input type="text" name="destination"  >
		     </td>
		     <td>Item Id
			  <input type="text" name="item_id"  >
		     </td>
		     <td>Supplier
			  <input type="text" name="supplier_id"  >
		     </td>
		     <td>Transportation Type
			  <input type="text" name="transportation_type"  >
		     </td>
		     <td>Date Shipped
			  <input type="date" name="date_shipped"  >
		     </td>
                     </tr>
                     </table>
                     <br><br><br>
		      <input type="submit">
		      <button type="submit" formaction="SearchShipment.php">Search Shipments</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>
		      </form>

	</body>
</html>
