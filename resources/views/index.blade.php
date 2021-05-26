<h1>New Todo List</h1>

<form method="post" action="{{ route('save_todo') }}">
@csrf
  <input type="text" name="task_name">
  <input type="submit" name="create" value="追加">
</form>

<h1>Tasks</h1>
@foreach($todos as $todo)
  <p>{{ $todo->task_name }}{{ $todo->created_at }}</p>

@endforeach