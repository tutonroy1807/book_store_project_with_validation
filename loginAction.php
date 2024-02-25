<?php

require 'Database.php';

// log in the user if the credentials match.
$db = new Database();
$username = $_POST['username'];
$password = $_POST['password'];

if (strlen($username) === 0 || strlen($password) === 0) {
  echo "
  <script>
    alert('Please Fill Required Field.');
  </script>";
  require 'login.php';
} else {
  // match the credentials
  $user = $db->query('SELECT * FROM users WHERE username = :username', [
    'username' => $username,
  ])->fetch();

  if ($user) {
    if (password_verify($password, $user['password'])) {
      session_start();
      $_SESSION['user'] = [
        'username' => $user['username']
      ];

      header('location: index.php');
    } else {
      echo '
    <script>alert("User not found");
    location.href="login.php";
    </script>
    ';
    }
  } else {
    echo '
    <script>
    alert("No account found for that username & password.");
    location.href="login.php";
    </script>
    ';
  }
}