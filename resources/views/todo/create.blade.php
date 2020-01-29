@extends ('layouts.app')
@section ('content')  <!--ディレクてぃぶ-->

<h2 class="mb-3">ToDo作成</h2>
{!! Form::open(['route' => 'todo.store']) !!} <!-- 変更 -->
  <div class="form-group">
  {!! Form::input('text', 'title', null, ['required', 'class' => 'form-control', 'placeholder' => 'ToDo内容']) !!} <!-- 変更 -->
  </div>
  {!! Form::submit('追加', ['class' => 'btn btn-success float-right']) !!} <!-- 変更 -->
{!! Form::close() !!} <!-- 変更 -->

@endsection