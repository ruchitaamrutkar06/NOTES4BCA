<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="login.css">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
  <div class="center">
    <h1 align="center">User Login</h1>
    <form method="post" action="lgsuccess.php">
      <div class="txt_field">
        <input type="text" name="un" required>
        <label>Username</label>
      </div>
            <div class="txt_field">
        <input type="password" name="pw" required>
        <label>Password</label>
      </div>
      <div class="g-recaptcha" data-sitekey="6Lfzm5opAAAAABjsnBP1oy9JJ2CYJCKAAKhE-c_z"></div>
      <input type="submit" value="Login">
      <div class="signup_link">
        
        
      </div>
    </form>
  </div>
</body>
</html>