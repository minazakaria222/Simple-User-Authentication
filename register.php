<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء حساب</title>
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        .register-container {
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
            position: relative;
        }
        input {
            width: 100%;
            padding: 10px 35px 10px 10px;
            border: 1px solid #dbdbdb;
            border-radius: 5px;
            font-size: 14px;
        }
        .input-group i {
            position: absolute;
            right: 10px;
            top: 10px;
            color: #999;
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
        .login-link {
            margin-top: 15px;
            font-size: 14px;
        }
        .login-link a {
            color: #0095f6;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="logo">MySite</div>
        <form method="post" action="register_handler.php">
            <div class="input-group">
                <input type="text" name="name" placeholder="الاسم الكامل" required>
                <i class="fas fa-user"></i>
            </div>
            <div class="input-group">
                <input type="email" name="email" placeholder="البريد الإلكتروني" required>
                <i class="fas fa-envelope"></i>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="كلمة المرور" required>
                <i class="fas fa-lock"></i>
            </div>
            <button class="btn" type="submit">إنشاء حساب</button>
        </form>
        <div class="login-link">
            لديك حساب بالفعل؟ <a href="login.php">تسجيل الدخول</a>
        </div>
    </div>
</body>
</html>
