<?php
require 'Database.php';
$db = new Database();

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$namePattern = "/[a-zA-Z]{3,50}/";
$usernamePattern = "/[a-zA-Z]{3,50}/";
$emailPattern = "/^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})$/";
$passwordPattern =
  "/((?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%^&*><?()*&+_])).{8,}/";
$phonePattern = "/(\+88)?-?01[3-9]\d{8}/";

// validate the form inputs
if (strlen($name) === 0 || strlen($email) === 0 || strlen($phone) === 0 || strlen($username) === 0 || strlen($password) === 0 || strlen($cpassword) === 0) {
  echo "
  <script>
    alert('Please Fill Required Field.');
  </script>";
  require 'register.php';
} else if (!preg_match($namePattern, $name)) {
  echo "
  <script>
    alert('Invalid name');
  </script>";
  require 'register.php';
} else if (!preg_match($emailPattern, $email)) {
  echo "
  <script>
    alert('Please provide a valid email.');
  </script>";
  require 'register.php';
} else if (!preg_match($phonePattern, $phone)) {
  echo "
  <script>
    alert('Please provide a valid phone number.');
  </script>";
  require 'register.php';
} else if (!preg_match($usernamePattern, $username)) {
  echo "
  <script>
    alert('Please provide a valid username.');
  </script>";
  require 'register.php';
} else if (!preg_match($passwordPattern, $password)) {
  echo "
  <script>
    alert('Please provide a password of at least eight characters.');
  </script>";
  require 'register.php';
} else if ($password !== $cpassword) {
  echo "
  <script>
    alert('Password and confirm password does not match.');
  </script>";
  require 'register.php';
} else {
  // check if the account already exists
  $duplicateEmail = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
  ])->fetch();
  $duplicateUsername = $db->query('SELECT * FROM users WHERE username = :username', [
    'username' => $username
  ])->fetch();
  $duplicatePhone = $db->query('SELECT * FROM users WHERE phone = :phone', [
    'phone' => $phone
  ])->fetch();

  // if yes, redirect to a login page
  if ($duplicateEmail) {
    // then someone with that email already exists and has an account
    echo "
  <script>
    alert('Email already exists');
  </script>";
    require 'register.php';
  } else if ($duplicateUsername) {
    // then someone with that username already exists and has an account
    echo "
  <script>
    alert('username already exists');
  </script>";
    require 'register.php';
  } else if ($duplicatePhone) {
    // then someone with that phone number already exists and has an account
    echo "
  <script>
    alert('Phone number already exists');
  </script>";
    require 'register.php';
  } else {
    // if not, save one to the database and redirect

    $db->query('INSERT INTO users(name,email,phone,username,password) VALUES(:name, :email, :phone, :username, :password)', [
      'name' => $name,
      'email' => $email,
      'phone' => $phone,
      'username' => $username,
      'password' => password_hash($password, PASSWORD_DEFAULT),
    ]);

    echo "
  <script>
  alert('Registration Succesful');
  location.href='login.php';
  </script>
  ";
  }
}

