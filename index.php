<!DOCTYPE html>
<html lang="en">

<head>
    <title>mmk ...</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="themes/themes1.js"></script>
    <script src="js/function.js"></script>
    <script src="javasctipt/time.js"></script>
    <!--------------fonts--------------------->

    <!--------------fonts--------------------->
    <style>
		@-webkit-keyframes bounceIn {
  from,
  20%,
  40%,
  60%,
  80%,
  to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }

  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3);
  }

  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1);
  }

  40% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9);
    transform: scale3d(0.9, 0.9, 0.9);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
    transform: scale3d(1.03, 1.03, 1.03);
  }

  80% {
    -webkit-transform: scale3d(0.97, 0.97, 0.97);
    transform: scale3d(0.97, 0.97, 0.97);
  }

  to {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

@keyframes bounceIn {
  from,
  20%,
  40%,
  60%,
  80%,
  to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }

  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3);
  }

  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1);
  }

  40% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9);
    transform: scale3d(0.9, 0.9, 0.9);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
    transform: scale3d(1.03, 1.03, 1.03);
  }

  80% {
    -webkit-transform: scale3d(0.97, 0.97, 0.97);
    transform: scale3d(0.97, 0.97, 0.97);
  }

  to {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

.bounceIn {
  -webkit-animation-duration: 0.75s;
  animation-duration: 0.75s;
  -webkit-animation-name: bounceIn;
  animation-name: bounceIn;
}
		
		#usercard{
			animation:bounceIn 2s ease-in-out;
		}
	</style>
</head>

<body id="body">
<div class="container pt-5 mt-2">
	<div class="row pt-5">
		<div class="col-sm-4"></div>
		<div class="col-md-4 pt-0 p-4">
			<div class="card" id="usercard">
			<div class="row border-bottom mb-2">
				<div class="col-sm-12 text-center">
				<img src="images/1234.png"  style="height: 80px;margin-top: -40px;">
				</div>
				<div class="col-sm-12 text-center mb-3">
				<p style="font-size: 23px;">LOGIN FORM</p>
				</div>	
			</div>
			<?php
				error_reporting(0);
				
if (isset($_GET['err']))
{
	$ERR = $_GET['err'];
	
	if ($ERR == 1)
	{
		$StrErr = "Wrong user name or password specified !";
	}
	elseif ($ERR == 2)
	{
		$StrErr = "You have logged out !";
	}
	elseif ($ERR == 3)
	{
		$StrErr = "Your session has expired !";
	}
  elseif ($ERR == 4)
   {
        $StrErr = "Whats Happening Bro!";
   }elseif ($ERR == 6)
   {
        $StrErr = "Welcome!";
   }
}
?>
				<form action="php/login.php" method="post">
					<div class="form-group mt-2">
					<p>User E-mail:</p>
						
						<input type="email" class="form-control" placeholder="User E-mail" name="UDBE">
					</div>
					
					<div class="form-group">
					<p>User Password: </span></p>
					
						<input type="password" class="form-control" placeholder="User Password" name="UDBP">
					</div>
					
					<div class="form-group">
					<p>User Secret:</p>
						<input type="password" class="form-control" placeholder="User src" name="UDBS">
					</div>
			
			        <p><span class="text-danger"><?php echo($StrErr); ?></span></p>
					<div class="form-group text-center mt-3 mb-3">
						<button  type="submit" value="Log In" class="btn btn-primary" id="butt" >Log In</button>
					</div>
					
				</form>
				
				<a href="#" class=""><span class="link">Forgotten account?</span></a>
				<a href="signup.php" class="text-right" style="margin-top: -23px;"><span class="link">Create a new account</span></a>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
						
			
</body>
<script>
 

</script>
</html>