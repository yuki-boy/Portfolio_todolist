@extends('layouts.view')
@section('content')

<div class="py-12">
  <div class="container">

    <h1>delete</h1>

    <h2>タスクを削除</h2>
    <form method="post" action="{{ route('delete_todo', ['id' => $todo->id]) }}">
    @csrf
      <p>タスクの名前：{{ $todo->task_name }}</p>
      <p>タスクの説明：{{ $todo->task_description }}</p>
      <p>タスクの時間：{{ $todo->estimate_hour }}</p>
      <input type="submit" name="delete" value="削除">
    </form>

    <a href="{{ route('todolist') }}">戻る</a>

  </div>
</div>

@endsection