<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <?php
  session_start();
  $_SESSION['page'] = "login";
  ?>
</head>
<body>
  <div class="form">
    <form action="/main.php" method="post">
      <fieldset>
        <legend>User Login Information</legend>
        <span>Username: </span><br><input type='text' name="user"></input><br>
        <span>Password: </span><br><input type='password' name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"></input><br>
        <p>Password was incorrect or Username does not exist.</p>
        <input type='submit' value="submit"></input>
      </fieldset>
    </form>
  </div>
</body>
</html>
