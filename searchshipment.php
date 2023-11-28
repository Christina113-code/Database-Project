<!DOCTYPE html>
<html lang="en">
    <!-- date_shipped (date, nullable)
Columndestination (varchar)
Columnitem_id (MUL, int, nullable)
Columnpickup_location (varchar)
Columnshipment_id (PRI, char)
Columnsupplier_id (MUL, int, nullable)
Columntransportation_type (varchar, nullable) -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baseball Card Database</title>
    <link rel="stylesheet" href="styles.css">

</head>
       <body>
       <header>
           <h1>Search Shipments</h1>
       </header>
               <nav>Search Shipments</nav>
	       <form method="get" action="FindShipment.php">
                     <tr>
                     <br>
		     <td>Item Id:
			  <input type="text" name="item_id"  >
		     </td>
		     <td>Destination:
			  <input type="text" name="destination"  >
		     </td>
		     <td>Date Shipped:
			  <input type="text" name="date_shipped"  >
		     </td>
		     <td>Shipment ID:
			  <input type="text" name="shipment_id"  >
		     </td>
		     <td>Supplier ID: 
			  <input type="text" name="supplier_id"  >
		     </td>
		     <td>Transportation Type:
			  <input type="text" name="transportation_type"  >
		     </td>
			  
                     </tr>
                     <br><br><br>
                     
		      <input type="submit" name="submit">
		      <button type="reset">Reset Search Fields</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>
		      
               </form>
       </body>
</html>
