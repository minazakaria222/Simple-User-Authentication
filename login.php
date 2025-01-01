<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $users = json_decode(file_get_contents('users.json'), true);

    foreach ($users as $user) {
        if ($user['email'] === $email && password_verify($password, $user['password'])) {
            $_SESSION['user_email'] = $email;
            header("Location: profile.php");
            exit;
        }
    }

    $error = "البريد الإلكتروني أو كلمة المرور غير صحيحة.";
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #517c41;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #fff;
            border: 1px solid #dbdbdb;
            width: 350px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .logo {
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #262626;
        }
        .input-group {
            margin-bottom: 15px;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #dbdbdb;
            border-radius: 5px;
            font-size: 14px;
        }
        .btn {
            width: 100%;
            background-color: #0095f6;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }
        .btn:hover {
            background-color: #007acc;
        }
        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 15px;
        }
        .signup-link {
            margin-top: 15px;
            font-size: 14px;
        }
        .signup-link a {
            color: #0095f6;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">MySite</div>
        <form method="post">
            <?php if (isset($error)): ?>
                <div class="error"><?php echo $error; ?></div>
            <?php endif; ?>
            <div class="input-group">
                <input type="email" name="email" placeholder="البريد الإلكتروني" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="كلمة المرور" required>
            </div>
            <button class="btn" type="submit">تسجيل الدخول</button>
        </form>
        <div class="signup-link">
            ليس لديك حساب؟ <a href="register.php">إنشاء حساب</a>
        </div>
    </div>
</body>
</html>
