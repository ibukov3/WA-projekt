<?php
require('db.php');
session_start();

if (isset($_POST['username'])){
        
	$username = stripslashes($_REQUEST['username']);

	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);

        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Korisničko ime/Lozinka nisu ispravni.</h3>
<br/>Kliknite ovdje za prijavu <a href='login.php'>Prijava</a></div>";
	}
    }else{
?>
<div class="form">
<h1>Prijava</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Korisničko ime" required />
<input type="password" name="password" placeholder="Lozinka" required />
<input name="submit" type="submit" value="Prijava" />
</form>
<p>Niste registrirani? <a href='registration.php'>Registrirajte se ovdje!</a></p>
</div>
<?php } ?>