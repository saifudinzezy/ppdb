<!DOCTYPE html>
<html>
<head>
	<title>Login admin</title>
	<link rel="stylesheet" type="text/css" href="css/modifikasi.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="login-card" style="margin-top: 50px;">
    <h1>Log-in</h1><br>
  <form method="POST" action="auth.php">
    <input type="text" name="user" placeholder="Username">
    <input type="password" name="pass" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
    
  <div class="login-help">
  <a>Aplikasi PPDB | 2017</a>
  </div>
</div>

</body>
</html>