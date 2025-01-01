<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header("Location: login.php");
    exit;
}

$userEmail = $_SESSION['user_email'];
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الملف الشخصي</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #517c41;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }
        .profile-container {
            background-color: #fff;
            border: 1px solid #dbdbdb;
            border-radius: 10px;
            padding: 20px;
            width: 350px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .welcome {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .email {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            background-color: #0095f6;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
        }
        .btn:hover {
            background-color: #007acc;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="welcome">مرحبًا بك في ملفك الشخصي</div>
        <div class="email">البريد الإلكتروني: <?php echo htmlspecialchars($userEmail); ?></div>
        <a href="logout.php" class="btn">تسجيل الخروج</a>
    </div>
</body>
</html>
