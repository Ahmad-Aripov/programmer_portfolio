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
<form action="{{route('programmers.update', $programmer)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Имя:</label>
            <input type="text" value="{{$programmer->first_name}}" name="first_name" class="form-control" id="exampleInputEmail1">
        </div>
    </div>
    <div class="card-body">
        <label for="exampleInputEmail1">Фамилия:</label>
        <input class="form-control" value="{{$programmer->last_name}}" type="text" name="last_name">
    </div>
    <div class="card-body">
        <label for="exampleInputEmail1"> Электронная почта:</label>
        <input class="form-control" value="{{$programmer->email}}" type="email" name="email">
    </div>
    <div class="card-body">
        <label for="exampleInputEmail1">Номер телефона:</label>
        <input class="form-control" value="{{$programmer->phone}}" type="text" name="phone">
    </div>
    <div class="card-body">
        <label for="exampleInputEmail1">Профессиональный заголовок:</label>
        <input class="form-control" value="{{$programmer->professional_title}}" type="text" name="professional_title">
    </div>
    <div class="card-body">
        <label for="exampleInputEmail1">Опыт работы:</label>
        <input class="form-control" value="{{$programmer->experience}}" type="text" name="experience">
    </div>
    <div class="card-body">
        <label for="exampleInputEmail1">Образование:</label>
        <input class="form-control" value="{{$programmer->education}}" type="text" name="education">
    </div>
    <div class="card-body">
        <label for="exampleInputEmail1">Навыки:</label>
        <input class="form-control" value="{{$programmer->skills}}" type="text" name="skills">
    </div>
    <button type="submit">Изменить</button>
</form>
</body>
</html>
