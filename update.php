<?php
include 'db.php';

$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($connection, $query);
$user = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id=$id";
    if (mysqli_query($connection, $query)) {
        echo "Data berhasil diperbarui.";
        header('Location: index.php');
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
    <title>Edit Data User</title>
</head>
<body>
    <h2>Edit Data User</h2>
    <form action="" method="POST">
        <label>Nama:</label><br>
        <input type="text" name="name" value="<?php echo $user['name']; ?>" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br>
        <label>Telepon:</label><br>
        <input type="text" name="phone" value="<?php echo $user['phone']; ?>" required><br>
        <input type="submit" name="update" value="Perbarui Data">
    </form>
</body>
</html>