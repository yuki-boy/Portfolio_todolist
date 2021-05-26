@extends('layouts.view')
@section('content')

<a href="{{ route('index') }}">new</a>

<div class="py-12">
  <div class="container">

    <a href="{{ route('create_todo') }}"><button type="button">タスクの追加</button></a>

    <table border="1">
      <thead>
        <tr>
          <th>タスクの名前</th>
          <th>タスクの説明</th>
          <th>タスクの時間(h)</th>
          <th colspan="2">操作</th>
        </tr>
      </thead>
      @foreach($todos as $todo)
      <tbody>
        <tr>
          <td>{{ $todo->task_name }}</td>
          <td>{{ $todo->task_description }}</td>
          <td>{{ $todo->estimate_hour }}</td>
          <td><a href="{{ route('edit_page', ['id' => $todo->id]) }}">タスクの編集</a></td>
          <td><a href="{{ route('delete_page', ['id' => $todo->id]) }}">タスクの削除</a></td>
        </tr>
      </tbody>
      @endforeach

    </table>

  </div>
</div>



@endsection

