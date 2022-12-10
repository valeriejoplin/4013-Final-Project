<?php

    echo "hello".$_POST['name'];
    // Clear the session data
    //$_SESSION = array();
    //session_destroy();

  //Redirect to the home page
  header('Location: frontEndMain.php');
  exit;
?>