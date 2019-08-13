<?php 
if (isset($_POST["submit"])) {
	if ($_POST["username"] == "admin" && $_POST["password"] == 123) {
		header("Location: admin.php");
		exit;
	} else{
		$error = true;
	}
}
?>

<html>
<head>
	<title>Login</title>
</head>
<body>

<h1>Login Admin</h1>

<?php if (isset($error)) : ?>
	<p style="color: red; font-family: italic;">username / password anda salah </p>
<?php endif; ?>

<ul>
<form action="" method="post">
	<li>
		<label for="username" >Username :</label>
		<input type="text" name="username" id="username">
	</li>
	<li>
		<label for="password" >password :</label>
		<input type="password" name="password" id="password">
	</li>
	<li>
		<button type="submit" name="submit">Login</button>
	</li>
</form>
</ul>

</body>
</html>