<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Search Sales Record</title>
		<link rel="stylesheet" type="text/css" href="321BaseBallStyle.css">
		<meta charset="utf-8">

       </head>
       <body>
               <h1 style="background-color:powderblue;">Search Sales Records</h1>
               <br><br><br>
	       <form method="get" action="FindSalesRecord.php">
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

                     </tr>
                     <br><br><br>
                     
		      <input type="submit">
		      <button type="reset">Reset Search Fields</button>
		      <button type="submit" formaction="SelectSalesRecord.php">Insert New Sales Records</button>
		      
               </form>
       </body>

</html>
