<html>
<head>
<title>form</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="signup.css">
<script>$(function(){
						$('#date').combodate();    
						});
						</script>
</head>
<body>
	
	<form method="POST">
	<div class="border">
	
		
		<div class="container">
			<div class="col-md-4"></div>
			<div class="col-md-4">
			<div class="jumbotron">
			<fieldset>
			 <legend>Login</legend>
			 <div class="form-group">
				<label for ="email">Email</label>
					<input type="email" name = "email" id="email" placeholder="*Email" class="form-control" required>
			</div>
			<div class="form-group">
				<label for ="email">Password</label>
					<input type="password" name = "password" id="password" placeholder="*Password" class="form-control" required>
			</div>
			<input type="submit" class="btn btn-success"  value="Login">
					
			</fieldset>
		
			<div class="col-md-4"></div>
			</div>
		</div>
	</div>
	
</div>
<script type="text/javascript" src="jquery/jquery.js"></script>
<script type="text/javascript" src="jquery/form1.js"></script>

						
</script>
</form>

</body>
</html>