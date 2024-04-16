<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <style>
        .card-body, .form-group {
            padding: 0 !important;
            margin-bottom: 0 !important;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
    <form action="{{route('programmers.store')}}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Имя:</label>
                <input type="text" name="first_name" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Фамилия:</label>
            <input class="form-control" type="text" name="last_name">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1"> Электронная почта:</label>
            <input class="form-control" type="email" name="email">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Номер телефона:</label>
            <input class="form-control" type="text" name="phone">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Профессиональный заголовок:</label>
            <input class="form-control" type="text" name="professional_title">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Опыт работы:</label>
            <input class="form-control" type="text" name="experience">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Образование:</label>
            <input class="form-control" type="text" name="education">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Навыки:</label>
            <input class="form-control" type="text" name="skills">
        </div>
        <button type="submit">Добавить</button>
    </form>
</body>
</html>
