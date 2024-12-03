<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
    if (mysqli_query($connection, $query)) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h2>Tambah Data User</h2>
    <form action="create.php" method="POST">
        <label>Nama:</label><br>
        <input type="text" name="name" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br>
        <label>Telepon:</label><br>
        <input type="text" name="phone" required><br>
        <input type="submit" name="submit" value="Tambah Data">
    </form>
</body>
</html>