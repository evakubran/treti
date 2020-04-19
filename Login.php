<?php

    if(isset($_SESSION['login_user'])){
        header("location: lorem");
        exit();
    }

    if(isset($_POST['submit'])) {
        if(!empty($_POST['username']) || !empty($_POST['password'])){
            $username=$_POST['username'];
            $password=$_POST['password'];

            $db = mysqli_connect("127.0.0.1", "root", "", "php");

            $dotaz = "SELECT count(id) FROM `data` WHERE username LIKE ? AND password LIKE ?";
            $vysledek = $db->prepare($dotaz);
            $vysledek->bind_param('ss', $username, $password);
            $vysledek->execute();
            $vysledek->bind_result($pocet);
            $vysledek->fetch();

           if($pocet == 1 ){
		$_SESSION['user']=$username;
                header("location: lorem");
                exit();
            }
        }
    }

?>

<html>
<head>
	<title>Login</title>
</head>
<body>
     <div id="main">
        <h1>Prihlaste se</h1>
	<form action="" method="post">
	     <label>username: </label>
	     <input id="name" name="username" placeholder="username" type="text">
  	     <label>password: </label>
	     <input id="password" name="password" placeholder="****" type="password">
	     <input name="submit" type="submit" value=" Login ">
	</form>
     </div>
</body>
</html>