<a href="{{ route('create_todo') }}"><button type="button" class="btn btn-primary">タスクの追加</button></a>

<table border="1">
  <tr>
    <th>タスクの名前</th>
    <th>タスクの説明</th>
    <th>タスクの時間(h)</th>
    <th colspan="2">操作</th>
  </tr>

  @foreach($todos as $todo)
    <tr>
      <td>{{ $todo->task_name }}</td>
      <td>{{ $todo->task_description }}</td>
      <td>{{ $todo->estimate_hour }}</td>
      <td><a href="{{ route('edit_page', ['id' => $todo->id]) }}"><button type="button" class="btn btn-primary">タスクの編集</button></a></td>
      <td><a href="{{ route('delete_page', ['id' => $todo->id]) }}"><button type="button" class="btn btn-primary">タスクの削除</button></a></td>
    </tr>
  @endforeach

</table>