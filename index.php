<!DOCTYPE html>
<html>
	<head>
		<title>AJAX</title>
		<meta name="viewport" content="width=device-width, initail-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<h3 class="text-center">Admin Insert</h3>
				<h4 class="text-center result"></h4>
					<form method="post" id="form">						
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="name" class="form-control" placeholder="Username"/>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="pass" class="form-control" placeholder="Password"/>
						</div>
						<button  type="submit" name="submit" id="submit" class="btn btn-primary">Insert</button>

					</form>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="resultd"></div>
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#submit").click(function(e){
				event.preventDefault(e);
				$.ajax({
					url:'insert.php',
					type:'post',
					data:$("#form").serialize(),
					dataType:'text',
					success:function(res){
						//$(".result").text(res);
						//for display
						$.ajax({
							url:'display.php',
							type:'post',
							dataType:'html',
							success:function(resd){
								$(".resultd").html(resd);
							}
						});
						
					}
				});
			});
		});		
	</script>
	
	
	
</html>