@extends('layouts.view')
@section('content')

<div class="py-12">
  <div class="container">

    <h1>edit</h1>

    <h2>タスクを編集</h2>
    <form method="post" action="{{ route('edit_todo', ['id' => $todo->id]) }}">
    @csrf
      <p>タスクの名前：<input type="text" name="task_name" value="{{ $todo->task_name }}"></p>
      <p>タスクの説明：<input type="text" name="task_description" value="{{ $todo->task_description }}"></p>
      <p>タスクの時間：<input type="number" name="estimate_hour" value="{{ $todo->estimate_hour }}"></p>
      <input type="submit" name="edit" value="編集">
    </form>

    <a href="{{ route('todolist') }}">戻る</a>

  </div>
</div>

@endsection