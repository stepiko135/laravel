<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>.header{
        height: 70px;
    } </style>
</head>

<body class="bg-light">
    <div class="header border-bottom shadow-sm d-flex mb-4 align-items-center p-3">
        <h4 class="header-left my-0 pl-5 mr-sm-auto">
            <a class="text-dark text-decoration-none" href="/">Laravel</a>
        </h4>
        <nav class="header-right ml-sm-auto pr-5">
            <a class="p-2 text-dark" href="/">Login</a>
            <a class="p-2 text-dark" href="/register">Register</a>
        </nav>
    </div>
    <div class="card mx-auto" style="max-width: 700px" >
        <div class="card-header ">
            <div calss="">@yield('title')</div>
        </div>
        <div class="p-3">
            @yield('forms')

        </div>
        

    </div>
</body>

</html>