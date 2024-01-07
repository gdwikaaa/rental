<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') Gede Bali Rental</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
 body{
            background: url('https://img.freepik.com/free-photo/3d-geometric-abstract-background_1048-11102.jpg?w=1480&t=st=1704660399~exp=1704660999~hmac=1d0d5a5e85c1f49a0f543f7e25eeb0835d868d4f2f37a0b8b92401f05402c424');
            background-repeat: no-repeat;
            background-size: 100%;
        }
        .fakeimg {
            height: 200px;
            background: #dc2929;
        }


        .form-signin {
            max-width: 330px;
            padding: 1rem;
        }
    </style>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signin w-100 m-auto">
        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <h1 class="font-monospace btn btn-primary fs-3 h3 mb-3 fw-bold"> Login</h1>
        
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" value="{{ old('email') }}">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
          </form>
    </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
