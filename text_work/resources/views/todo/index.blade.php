<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>
</head>
<body>
    <h1>ToDoリスト</h1>
    <form action="#" method="POST">
        <input type="radio" name="filter" id='filter' value="all" checked>すべて
        <input type="radio" name="filter" id='filter' value="progress">作業中
        <input type="radio" name="filter" id='filter' value="finished">完了
    </form>
@if (count($errors)>0)
@foreach ($errors->all() as $error)  
<ul>
    <li>{{$error}}</li>
</ul>
@endforeach
@endif
    <table>
        <tr>
            <th>ID</th><th>コメント</th><th>状態</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->text}}</td>
                <td>
                    <a href="/todo">
                        @if ($item->progress==1)
                        作業中
                        @else
                        完了
                        @endif
                    </a>
                </td>
                <td>
                <a href="#">削除</a>
                </td>
            </tr>
        @endforeach
    </table>

    <h1>新規タスクの追加</h1>
    <form action="/todo" method="POST">
        @csrf
        <input type="text" name="text" id="text" autofocus >
        {{-- value=1なら作業中 --}}
        <input type="hidden" name="progress" id="progress" value=1 >
        <input type="submit" value="追加">
    </form>
</body>
</html>