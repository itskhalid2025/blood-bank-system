
<?php
session_start();
require_once '../config/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $blood_group = $_POST['blood_group'];
    $location = $_POST['location'];

    $stmt = $pdo->prepare("INSERT INTO users (name, email, password, blood_group, location) VALUES (?, ?, ?, ?, ?)");
    if ($stmt->execute([$name, $email, $password, $blood_group, $location])) {
        $_SESSION['success'] = "Registration successful!";
        header("Location: ../index.php");
    } else {
        $_SESSION['error'] = "Registration failed.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <h2>Donor Registration</h2>
    <?php if (isset($_SESSION['error'])): ?>
        <p style="color: red;"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
    <?php endif; ?>
    <form method="POST">
        <label>Name:</label><input type="text" name="name" required><br>
        <label>Email:</label><input type="email" name="email" required><br>
        <label>Password:</label><input type="password" name="password" required><br>
        <label>Blood Group:</label>
        <select name="blood_group" required>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select><br>
        <label>Location:</label><input type="text" name="location" required><br>
        <button type="submit">Register</button>
    </form>
    <?php include '../includes/footer.php'; ?>
</body>
</html>
