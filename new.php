<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <script src="/script.js"></script>
  <?php
  session_start();
  $_SESSION['page'] = "new";
  ?>
</head>
<body>
  <div class="form">
    <form name="login" action="/main.php" method="post" onsubmit="return validate()">
      <fieldset>
        <legend>User Login Information</legend>
        <span>Username: </span><br><input type='text' name="user"></input><br>
        <span>Password: </span><br><input type='password' name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"></input><br>
        <span>Email*: </span><br><input type='text' name="mail"></input><br>
        <span>*Optional field.</span><br>
        <input type='submit' value="submit"></input>
      </fieldset>
    </form>
  </div>
</body>
</html>
