<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="sign.css">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
  <div class="center">
    <h1 align="center">Signup</h1>
    <form method="post" action="reg.php">
    <div class="txt_field">
        <input type="text" name="em" required>
        <label>email</label>
      </div>
      <div class="txt_field">
        <input type="text" name="un" required>
        <label>username</label>
      </div>
            <div class="txt_field">
        <input type="password" name="pw" required>
        <label>password</label>
      </div>
     
      <div class="g-recaptcha" data-sitekey="6Lfzm5opAAAAABjsnBP1oy9JJ2CYJCKAAKhE-c_z"></div>
      <input type="submit" value="register now"><br>
      <br>
      </div>
    </form>
  </div>
</body>
</html>