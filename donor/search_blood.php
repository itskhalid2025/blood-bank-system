
<?php
session_start();
require_once '../config/db_connect.php';

$blood_group = $_GET['blood_group'] ?? '';
$location = $_GET['location'] ?? '';

$donors = [];
if ($blood_group && $location) {
    $stmt = $pdo->prepare("SELECT name, email, blood_group, location FROM users WHERE blood_group = ? AND location LIKE ?");
    $stmt->execute([$blood_group, "%$location%"]);
    $donors = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Blood</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <h2>Search Blood Donors</h2>
    <form method="GET">
        <label>Blood Group:</label>
        <select name="blood_group">
            <option value="">Select</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select><br>
        <label>Location:</label><input type="text" name="location"><br>
        <button type="submit">Search</button>
    </form>

    <?php if (isset($donors)): ?>
        <h3>Results:</h3>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Blood Group</th>
                <th>Location</th>
            </tr>
            <?php foreach ($donors as $donor): ?>
                <tr>
                    <td><?php echo htmlspecialchars($donor['name']); ?></td>
                    <td><?php echo htmlspecialchars($donor['email']); ?></td>
                    <td><?php echo htmlspecialchars($donor['blood_group']); ?></td>
                    <td><?php echo htmlspecialchars($donor['location']); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    <?php include '../includes/footer.php'; ?>
</body>
</html>
