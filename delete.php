<?php
$conn = mysqli_connect("localhost","root","","job_portfolio");

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM contact_messages WHERE id=$id");

header("Location: admin.php");
?>