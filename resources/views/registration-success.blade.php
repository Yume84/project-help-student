<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration success !</title>
</head>
<body class="d-flex justify-content-center p-4 pt-4">
    <div class="card">
        <div class="card-header bg-success text-white">Registration complete</div>
        <div class="card-body">
            Hello <b>{{ request()->name }}</b>, thank you for joinin us !
            <a href="/dashboard" class="btn btn-sm btn-primary">Commence maintenant</a>
        </div>
    
</body>
</html>