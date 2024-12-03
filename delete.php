<?php
include 'db.php';

$id = $_GET['id'];
$query = "DELETE FROM users WHERE id = $id";

if (mysqli_query($connection, $query)) {
    echo "Data Berhasil dihapus.";
    header('Location: index.php');
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}