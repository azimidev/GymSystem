<?php
  define("DB_SERVER", "127.0.0.1");
  define("DB_USER", "amir");
  define("DB_PASS", "azimi");
  define("DB_NAME", "armstrong_gym");

  // 1. Create a database connection
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // Test if connection succeeded
  if (mysqli_connect_errno()) {
      die("Database connection failed: " .
              mysqli_connect_error() .
              " (" . mysqli_connect_errno() . ")"
      );
  }
?>