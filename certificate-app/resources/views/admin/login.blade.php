<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<title>تسجيل دخول المدير</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">
<div class="container">
    <h3 class="mb-3">تسجيل دخول المدير</h3>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="/admin/login" method="POST">
        @csrf
        <div class="mb-3">
            <label>اسم المستخدم</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>كلمة المرور</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">دخول</button>
    </form>
</div>
</body>
</html>
