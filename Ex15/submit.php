<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    // Display submitted data with Bootstrap styles
    echo "<div class='alert alert-success' role='alert'>
            <h4 class='alert-heading'>Received Data</h4>
            <p>Name: $name</p>
            <p>Email: $email</p>
            <p>Age: $age</p>
          </div>";
} else {
    echo "<div class='alert alert-danger' role='alert'>Invalid request!</div>";
}

?>
