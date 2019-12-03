<?php

require "../db/connect.php";

$userId = "";
$userName = "";


if($_SERVER['REQUEST_METHOD'] == "POST"){
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	$query = "SELECT * FROM `admin` WHERE `username`='".$username."' && `password`='".$password."'" ;	

	$result = mysqli_query($connect, $query);

	if($result == 1){

		foreach($result as $key => $val){
			$userId = $val['id'];
			$userName = $val['name'];
		}

		session_start();
		$_SESSION['userId'] = $userId;
		$_SESSION['userName'] = $userName;//

		header('Location: index.php?message=You are logged in Successfully.');
	}else{
		echo "INVALID USERNAME / PASSWORD ";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>BOOK MY SHOW</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/bootstrap-grid.min.css" rel="stylesheet">
	<link href="../css/bootstrap-reboot.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/4.3/examples/sign-in/signin.css">
</head>
<body>


	<form class="form-signin" action="" method="post" enctype="text/form-data">
  <img class="mb-4" src="" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Username</label>
  <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
</form>


</body>
</html>