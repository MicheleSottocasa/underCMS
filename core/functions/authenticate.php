<?php

if(isset($_GET['logout'])){
    session_destroy();
    header('Location: /under-admin?username='.$_GET['username']);
}

require_once 'core/class.dbManager.php';
$dbManager = new \core\dbManager();
$conn = $dbManager->getConn();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
    // Could not get the data that should have been sent.
    exit('Please fill both the username and password fields!');
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $conn->prepare('SELECT pssw FROM users WHERE userID = (SELECT id FROM usersData WHERE username = ?)')) {
    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    // Store the result so we can check if the account exists in the database.
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($password);
        $stmt->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        //if (password_verify($_POST['password'], $password)) {
        if ($_POST['password'] == $password) {
            // Verification success! User has logged-in!
            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
            $reply = $conn->query("SELECT photoPhat, name, surname FROM usersData WHERE username = '". $_POST['username']."'");
            $reply = $reply->fetch_assoc();
            session_start();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['name'] = $reply['name'];
            $_SESSION['surname'] = $reply['surname'];
            $_SESSION['photo-path'] = $reply["photoPhat"];
            header('Location: /dashboard');
        } else {
            // Incorrect password
            header('Location: /under-admin?error=1&username='.$_POST['username']);
        }
    } else {
        // Incorrect username
        header('Location: /under-admin?error=1&username='.$_POST['username']);
    }

    $stmt->close();
}
