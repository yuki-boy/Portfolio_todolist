<a href="{{ route('create_todo') }}"><button type="button" class="btn btn-primary">タスクの追加</button></a>

<div class="py-12">
  <div class="container">

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
      <td><a href="{{ route('edit_page', ['id' => $todo->id]) }}"><button type="button" class="btn btn-primary">タスクの編集</button></a></td>
      <td><a href="{{ route('delete_page', ['id' => $todo->id]) }}"><button type="button" class="btn btn-primary">タスクの削除</button></a></td>
    </tr>
  </tbody>
  @endforeach

</table>

</div>
  </div>