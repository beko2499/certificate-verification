<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>التحقق من الشهادات الجامعية</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">
    <div class="container">
        <h2 class="mb-4">التحقق من الشهادات الجامعية</h2>

        @if(isset($message))
            <div class="alert alert-info">{{ $message }}</div>
        @endif

        <form action="/verify" method="POST">
            @csrf
            <div class="mb-3">
                <label for="serial_number" class="form-label">رقم الشهادة</label>
                <input type="text" name="serial_number" id="serial_number" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">تحقق</button>
        </form>
    </div>
</body>
</html>
