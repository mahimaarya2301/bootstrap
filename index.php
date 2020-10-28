<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bootstrap 4 Example</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<style>
			.a_row{
				height:100px;
				border:1px solid red;
			}
			.yellow{
				background-color:yellow;
			}
			.orange{
				background-color:orange;
			}
			
		</style>	
	</head>
	<body>
		<div class="row a_row">
			<div class="col-sm-10 col-md-6 col-lg-4 col-xl-1 yellow">A</div>
			<div class="col-sm-2 col-md-6 col-lg-8 col-xl-11 orange">B</div>
		</div>	
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</body>
</html>