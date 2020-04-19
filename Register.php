<?php

    if(isset($_SESSION['user'])){
        header("location: lorem");
        exit();
    }

     if(isset($_POST['submit'])){
	if(!(empty($_POST['user'])) && !(empty($_POST['passw']))){

	$db = mysqli_connect("127.0.0.1", "root", "", "php");
	$db2 = mysqli_connect("127.0.0.1", "root", "", "php");

	$user=$_POST['user'];
	$passw=$_POST['passw'];

	$dotazuser = "SELECT COUNT(id) FROM data WHERE username LIKE ?";
	$username = $db->prepare($dotazuser);
	$username->bind_param('s', $user);
	$username->execute();
	$username->bind_result($same);
	$username->fetch();

	if($same == 0){
	    $dotaz = "INSERT INTO data(username, password) VALUES (?, ?)";
	    $novy = $db2->prepare($dotaz);
    	    $novy->bind_param('ss', $user, $passw);
	    $novy->execute();
	    echo $user;
	    echo $passw;

	    header("location: login");
	    exit();

	    }else if($same > 0 ){
		echo "zabrane username";
	    }
	}  
    }

?>

<html>
<head>
	<title>Registrace</title>
</head>
<body>
	<div id="main">
	     <h1>Registrace</h1>
 	     <form action="" method="post">
		<label>username :</label>
		<input id="name" name="user" placeholder="username" type="text">
		<label>password :</label>
		<input id="password" name="passw" placeholder="****" type="password">
		<input name="submit" type="submit" value="Register">
	     </form>
	</div>
</body>
</html>
