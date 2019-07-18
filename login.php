<?php
require("config.php");

$loginURL=$gclient->createAuthUrl();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="col-md-6">

		<form>
			<!-- <input type="text" name="email" placeholder="email" class="form-control">
			<input type="text" name="password" placeholder="Password" class="form-control">
			<button></button> -->
			<input type="button" onclick="window.location='<?php echo $loginURL; ?>'" name="login" value="Login With Google" class="btn btn-success">
		</form>
		
	</div>
	
</div>

</body>
</html>