<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Mail Sender</title>
	<link rel="stylesheet" type="text/css" href="main.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4-offset">
				<img src="img/material_pic.png" alt="Image Not Shown!">
			</div>
			<div class="col-sm-4">
				<p>Material Flow and Conveyors</p>
				<p>materialflow.com</p>
			</div>
		</div>
	</div>	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<p>Dear <?php echo $_GET['first_name']; ?>,</p>
				<p>We wanted to show our appriciation for purchasing the <?php echo $_GET['products_purchased'] ?>. We wanted to recommend a few items that you might be interested in. In addition please check out company catalog for more info on products we carry. If you have any questions please feel free to contact customer car department and we would be happy to assist you.</p>
				<p>Sincerely,<br />
				Material Flow and Conveyor Systems</p>
				<p>If you do not wish to recieve any further emails please click link below to be remove from our mailing list.</p>
			</div>
		</div>
	</div>	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
			</div>
		</div>
	</div>	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>		
</body>
</html>