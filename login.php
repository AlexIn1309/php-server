<?php

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the username and password from the login form
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database for the user
    $query = "SELECT * FROM users WHERE name_user='$username' AND pass_user='$password'";
    $result = mysqli_query($connection, $query);

    // Check if the query was successful
    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            // Login successful
            echo "Login successful!";
        } else {
            // Login failed
            echo "Invalid username or password.";
        }
    } else {
        // Error executing the query
        echo "Error: " . mysqli_error($connection);
    }

    // Free up the result set and close the connection
    mysqli_free_result($result);
    mysqli_close($connection);
}
?>
