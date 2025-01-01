<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // التحقق من صحة البريد الإلكتروني
    if (!filter_var(value: $email, filter: FILTER_VALIDATE_EMAIL)) {
        echo "البريد الإلكتروني غير صالح.";
        exit;
    }

    // التحقق من كلمة المرور (أن تكون 8 أحرف على الأقل)
    if (strlen($password) < 8) {
        echo "كلمة المرور يجب أن تحتوي على 8 أحرف على الأقل.";
        exit;
    }

    // تشفير كلمة المرور قبل التخزين
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // تخزين البيانات (افتراضًا في ملف أو قاعدة بيانات)
    $users = json_decode(file_get_contents('users.json'), true) ?? [];
    $users[] = ['email' => $email, 'password' => $passwordHash];

    // حفظ البيانات في الملف
    file_put_contents('users.json', json_encode($users));

    // إرسال بريد إلكتروني للتحقق
    $token = bin2hex(random_bytes(16)); // إنشاء رمز تحقق عشوائي
    $verificationLink = "https://example.com/verify.php?email=$email&token=$token";
    mail($email, "تأكيد حسابك", "اضغط على الرابط لتأكيد حسابك: $verificationLink");

    echo "تم التسجيل بنجاح! يرجى التحقق من بريدك الإلكتروني.";
    header("Location: login.php");
    exit();
}
?>
