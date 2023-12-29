<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') - Sparepart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background: url('https://img.freepik.com/free-photo/abstract-surface-textures-white-concrete-stone-wall_74190-8189.jpg?w=1380&t=st=1703838577~exp=1703839177~hmac=2e68080d49d344b6010e12ad560c7cbc983bf1317ceae91637976ab7acf98ec7');
            background-repeat: no-repeat;
            background-size: 100%;
        }
        .fakeimg {
            height: 200px;
            background: #dc2929;
        }
    </style>
</head>

<body>

    @include('layout.header')

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                @yield('breadcrumb')
            </ol>
        </nav>

        @yield('content')
    </div>

</body>

</html>
