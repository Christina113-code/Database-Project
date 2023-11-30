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
	       <form method="get" action="DeleteShipment.php">
	       	  <table style="width:100%;">
			     <tr>
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
                  </table>
                     <br><br><br>
                     
		      <input type="submit" name="submit">
		      <button type="reset">Reset Search Fields</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>
		      
               </form>
       </body>
</html>
