<?php
$conn = mysqli_connect("localhost","root","","job_portfolio");

$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT * FROM contact_messages WHERE id=$id");
$row = mysqli_fetch_assoc($data);
?>

<h2>update  Message</h2>

<form method="POST">
Name: <br>
<input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>

Email: <br>
<input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>

Message: <br>
<textarea name="message"><?php echo $row['message']; ?></textarea><br><br>

<button name="update">Update</button>
</form>

<?php
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    mysqli_query($conn,"UPDATE contact_messages SET name='$name', email='$email', message='$message' WHERE id=$id");

    header("Location: admin.php");
}
?>