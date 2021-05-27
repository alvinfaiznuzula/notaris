<?php
ob_start();
session_start();
?>
<html>
<head>
	<title>Login Kinerja Notaris/PPAT</title>
	<style rel="stylesheet" type="text/css">
		body {
			padding-top:120px;
			background: silver;
			font-family: 'Open Sans', sans-serif;
		}
		.login {
			width: 500px;
			margin: 20px auto;
			font-size: 13px;
		}
		.login-header,.login p {
			margin-top: 0;
			margin-bottom: 0;
		}
		.login-header {
			background: darkorange;
			padding: 20px;
			font-size: 20px;
			font-weight: normal;
			text-align: center;
			color: #000;
		}
		.login-container {
			background: #f5f5f5;
			padding: 15px;
		}
		.login p {
			padding: 15px;
		}
		.login input {
			box-sizing: border-box;
			display: block;
			width: 100%;
			border-width: 1px;
			border-style: solid;
			padding: 16px;
			outline: 0;
			font-family: inherit;
			font-size: 20px;
		}
		.login input[type="email"],.login input[type="password"] {
			background: #fff;
			border-color: #bbb;
			color: #555;
		}
		.login input[type="email"]:focus, .login input[type="password"]:focus {
			border-color: #888;
		}
		.login input[type="submit"] {
			background: darkorange;
			border-color: transparent;
			color: #000;
			cursor: pointer;
		}
		.login input[type="submit"]:hover {
			background: #32CD32;
		}
		.login input[type="submit"]:focus {
			border-color: white;
		}
		.text{
			text-align: center;
		}
	</style>
</head>
<body>
<div class="login">
    <h2 class="login-header" >Login Admin</h2>
    <form action="admin.php" class="login-container" method="POST">
		<p><input type="text" name="id_user" placeholder="Username"></p>
		<p><input type="password" name="password" placeholder="Password"></p>
		<p><input type="submit" value="Login"></p>
	</form>

	<div class="text">
		<h3>Divisi Operasional <br> PT Bank Negara Indonesia (Persero) Tbk.</h3>
		<h4>2021</h4>
	</div>
	
</div>
</body>
</html>