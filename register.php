<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register to CSED notice board</title>
	<link rel="icon" href="img/logo.jpg">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
                $("#div1").fadeOut(3000);
        });
    </script>

    <script>
	// When the user over and out on div, open the popup
	function myFunction() {
	    var popup = document.getElementById("myPopup");
	    popup.classList.toggle("show");
	}
	</script>

	<script>
function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}
</script>

</head>
<body>
	<div class="registerBox">
			<h2>Sign Up Here</h2>
			<form name="myForm" onsubmit="return validateForm();" method="post" action="register.php">
					<?php include('errors.php'); ?>
						<label>Username</label>
						<input type="text" name="username" value="<?php echo $username; ?>">
						<label>Email</label>
						<input type="email" name="email" value="<?php echo $email; ?>">
						<label>Password</label>
						<input type="password" name="password_1">
						<label>Confirm password</label>
						<input type="password" name="password_2">
						<button type="submit" class="btn" name="reg_user">Register</button>
				<p style="color:red;">
					Already a member? <a href="login.php">Sign in</a>
				</p>
				<div style="text-align:center" class="popup" onmouseover="myFunction()" onmouseout="myFunction()"><i class="fa fa-mobile-phone" style="font-size:24px ; color:white"></i> &nbsp<a href="CSED@MNNIT.apk">Android app</a>
				  <span style="text-align:center" class="popuptext" id="myPopup">Download this for your mobile</span>
				</div>
			</form>
	</div>
</body>
</html>
