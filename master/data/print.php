<?php 
require_once('../class/Sales.php');
if(isset($_GET['date'])){
	$date = $_GET['date'];

	$reports = $sales->daily_sales($date);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <link href="../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
  	
 <center>
	<h1>Daily Sales Report</h1>
 	<h2>as of</h2>
 	<h3><?= $date; ?></h3>
 </center>
<br />
<div class="table-responsive">
        <table id="myTable-report" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th><center>Type</center></th>
                    <th><center>Laundry Received</center></th>
                    <th><center>Date Paid</center></th>
                    <th><center>Amount</center></th>
                </tr>
            </thead>
            <tbody>
            	<?php 
            		$total = 0;
            		foreach($reports as $r): 
            		$total += $r['sale_amount'];
            	?>
	                <tr align="center">
	                    <td align="left"><?= $r['sale_customer_name']; ?></td>
	                    <td><?= $r['sale_type_desc']; ?></td>
	                    <td><?= $r['sale_laundry_received']; ?></td>
	                    <td><?= $r['sale_date_paid']; ?></td>
	                    <td><?= '₱ '.number_format($r['sale_amount'], 2); ?></td>
	                </tr>
	            <?php endforeach; ?>
            </tbody>
	            <tr>
	            	<td></td>
	            	<td></td>
	            	<td></td>
	            	<td align="right"><strong>TOTAL:</strong></td>
	            	<td align="center"><strong><?= '₱ '.number_format($total,2); ?></strong></td>
	            </tr>
        </table>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('#myTable-report').DataTable();
    });
</script>

</body>
</html>

<script type="text/javascript">
	print();
</script>

<?php
}


