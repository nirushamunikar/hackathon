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
			 <legend>Sign<font color="red"> Up</font></legend>
  
			<div class="form-group">
				<label for="fullName">Full name</label>
					<input type="text" name = "fullname" id="fullName" placeholder="*First name" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="address">Address</label>
					<input type="text" id="taddress" name="taddress" placeholder="Address" class="form-control">
			</div>
			<div class="form-group">
			
				<label for="contactNumber">Contact Number </label>
			
					<input type="text" name = "contactnumber" id="contactNumber" placeholder="Mobile" class="form-control">
				
			</div>
			<div class="form-group">
				<label for ="email">Email</label>
					<input type="email" name = "email" id="email" placeholder="*Email" class="form-control" required>
			</div>
			<div class="form-group">
				<label for ="email">Password</label>
					<input type="password" name = "password" id="password" placeholder="*Password" class="form-control" required>
			</div>
			<div class="form-group">
				<label for ="email">Confirm Password</label>
					<input type="password" name = "password" id="password" placeholder="*Confirm Password" class="form-control" required>
			</div>
			<div class="form-group">
					<label>Gender</label><br><div class="row">
					<div class="col-md-6"><input type="radio" id="male" name="gender" value="male"><label for="male" >male</label></div>
					<div class="col-md-6"><input type="radio" id="female" name="gender" value="female"><label for="female">female</label></div></div>
			</div>
					
					<input type="submit" class="btn btn-success" style="align:centre" value="Submit">
					
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