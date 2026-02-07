<?php


session_start();

// Database connection
$conn = mysqli_connect("localhost", "root", "", "job_portfolio");

if (!$conn) {
    die("Database connection failed");
}

// Run only when form is submitted

if (isset($_POST['submit'])) {

    $userName    = trim($_POST['name']);
    $userEmail   = trim($_POST['email']);
    $userMessage = trim($_POST['message']);

    //  server-side validation
    if ($userName === "" || $userEmail === "" || $userMessage === "") {
        $_SESSION['error'] = "Please fill all required fields.";
        header("Location: index.php");
        exit;
    }

    // Save data in database
    $query = "
        INSERT INTO contact_messages (name, email, message)
        VALUES ('$userName', '$userEmail', '$userMessage')
    ";

    if (mysqli_query($conn, $query)) {
        $_SESSION['success'] = "Thanks! Your message has been sent successfully.";
    } else {
        $_SESSION['error'] = "Something went wrong. Please try again.";
    }

    header("Location: index.php");
    exit;
}

// Safety redirect
header("Location: index.php");
exit;