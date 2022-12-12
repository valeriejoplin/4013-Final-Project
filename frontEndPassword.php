<?php

$username = '';
$password = '';
$errorMessage = '';

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Retrieve the username and password from the form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Check if the username and password are correct
  if ($username === 'admin' && $password === 'admin') {
    // Redirect to the backend main page
    header('Location: backEndMain.php');
    exit;
  } else {
    // Set an error message
    $errorMessage = 'Incorrect username or password.';
  }
}

?>

<!-- HTML form for the user to enter their username and password -->
<form method="post" action="">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>">
  <br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password">
  <br>
  <input type="submit" name="submit" value="Login">
</form>

<!-- Display the error message, if any -->
<?php if (!empty($errorMessage)) { ?>
  <p><?php echo $errorMessage; ?></p>
<?php } ?>
