<?php require_once("includes/session.php"); ?>
<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/validation_functions.php"); ?>

<?php
  if (isset($_POST['submit_signup']) && $_POST['randcheck'] == $_SESSION['rand_signupForm']) {
      //process the form

      // validations
      $required_fields = array("username", "email", "password");
      validate_presences($required_fields);

      $fields_with_max_lengths = array("username" => 20);
      validate_max_lengths($fields_with_max_lengths);

      validate_password();

     if (empty($errors)) {
          //perform create
          $username = escape_string($_POST["username"]);
          $email = escape_string($_POST["email"]);
          $password = escape_string($_POST["password"]);

          // 2. Perform database query
          $query  = "INSERT INTO users (";
          $query .= "username, email, hashed_password";
          $query .= ") VALUES (";
          $query .= "'{$username}', '{$email}', '{$password}'";
          $query .= ")";
          $result = mysqli_query($connection, $query);

          if ($result && mysqli_affected_rows($connection) >= 0) {
              // Success
             $alert_message  = "Signup <strong>successful</strong>.";
          } else {
              // Failure
               $alert_message  = "";//querying the database has to be always unsuccessful
          }
      }
    } elseif (isset($_POST['submit_feedback']) && $_POST['randcheck'] == $_SESSION['rand_contactForm']) {
        // validations
        $required_fields_contact = array("message");
        validate_presences($required_fields_contact);

        $fields_with_max_lengths = array("name" => 20);
        validate_max_lengths($fields_with_max_lengths);

        $fields_with_min_lengths = array("message" => 10);
        validate_min_lengths($fields_with_min_lengths);

        if (empty($errors)) {
          //perform create
          $name = escape_string($_POST["name"]);
          $email = escape_string($_POST["email"]);
          $message = escape_string($_POST["message"]);

          // 2. Perform database query
          $query  = "INSERT INTO feedback (";
            $query .= "name, email, message";
            $query .= ") VALUES (";
              $query .= "'{$name}', '{$email}', '{$message}'";
              $query .= ")";
              $result = mysqli_query($connection, $query);

              if ($result && mysqli_affected_rows($connection) >= 0) {
                // Success
                 $alert_message = "Thank you for your <strong>feedback</strong>.";
              } else {
                // Failure
                $alert_message = "";
              }
      }else{
        // this is probably a get request
      }
  }
 ?>

<!-- HEADER -->
<?php include("includes/layouts/header.php"); ?>

<!-- HOME SECTION-->
<?php include("includes/layouts/home.php"); ?>

<!-- EXPLORE -->
<?php include("includes/layouts/explore.php"); ?>

<!-- CREATE -->
<?php include("includes/layouts/create.php"); ?>

<!-- SHARE -->
<?php include("includes/layouts/share.php"); ?>

<!-- FOOTER -->
<?php include("includes/layouts/footer.php"); ?>
