@extends('layouts.view')
@section('content')

<div class="py-12">
  <div class="container">

    <form method="post" action="{{ route('save_todo') }}">
    @csrf
      @if ($errors->any())
        <ul>
        @foreach ($errors->all() as $error)
            <li style="color:red">{{$error}}</li>
        @endforeach
        </ul>
      @endif

      <p>タスクの名前：<input type="text" name="task_name"></p>
      <p>タスクの説明：<input type="text" name="task_description"></p>
      <p>タスクの時間：<input type="number" name="estimate_hour"></p>
      <input type="submit" name="create" value="追加">
    </form>

    <a href="{{ route('todolist') }}">戻る</a>

  </div>
</div>

@endsection