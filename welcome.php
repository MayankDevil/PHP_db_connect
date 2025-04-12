<?php
  session_start();
  
  // Check if the session is secure
  if (!isset($_SESSION['isSecure'])) 
  {
      header("Location: /");
      exit(); // Always add exit after header redirect
  }
  
  // Handle logout button click
  if (isset($_POST['logout-button'])) 
  {
      $_SESSION['isSecure'] = '';
      session_unset();
      session_destroy(); // <-- typo was here: "destory"
      header("Location: /"); // Redirect after logout
      exit();
  }
?>
  
  <!-- HTML part -->
  <h1>Welcome Page</h1>
  
  <form method="post">
      <input type="submit" name="logout-button" value="Logout" />
  </form>
