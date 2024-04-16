<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <table class="table">
        <tr>
            <th>№</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Электронная почта</th>
            <th>Номер телефона</th>
            <th>Профессиональный заголовок</th>
            <th>Опыт работы</th>
            <th>Образование</th>
            <th>Навыки</th>
            <td>
                <form action="{{route('programmers.create')}}" method="GET">
                    <input type="submit" value="Добавить" class="btn btn-info">
                </form>
            </td>
        </tr>
        @foreach($programmers as $programmer)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$programmer->first_name}}</td>
                <td>{{$programmer->last_name}}</td>
                <td>{{$programmer->email}}</td>
                <td>{{$programmer->phone}}</td>
                <td>{{$programmer->professional_title}}</td>
                <td>{{$programmer->experience}}</td>
                <td>{{$programmer->education}}</td>
                <td>{{$programmer->skills}}</td>
                <td>
                    <form action="{{route('programmers.destroy', $programmer->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Удалить" class="btn btn-danger">
                    </form>
                </td>
                <td>
                    <form action="{{route('programmers.edit', $programmer->id)}}" method="GET">
                        @csrf
                        <input type="submit" value="Изменить" class="btn btn-info">
                    </form>
                </td>
                <td>
                    <form action="{{route('programmers.show', $programmer->id)}}" method="GET">
                        @csrf
                        <input type="submit" value="Портфолио" class="btn btn-info">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
