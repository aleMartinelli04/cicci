<!DOCTYPE html>
<html lang="it">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="d-flex min-vh-100 align-items-center">
    <div class="container-fluid text-center">
        <form method="post" action="login.php" class="w-50 m-auto">
            <input type="text" name="nome" placeholder="nome" class="form-control mb-3">
            <input type="password" name="password" placeholder="password" class="form-control mb-5">
            <button type="submit" class="btn btn-danger">Login</button>
        </form>
    </div>
</div>
</body>
</html>