<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>لوحة التحكم</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">
    <div class="container">
        <h3>مرحبًا بك في لوحة التحكم 🎛️</h3>
        <p>تستطيع من هنا إدارة الشهادات (إضافة – تعديل – حذف)</p>

        <a href="{{ route('admin.logout') }}" class="btn btn-danger">تسجيل الخروج</a>
    </div>
</body>
</html>
