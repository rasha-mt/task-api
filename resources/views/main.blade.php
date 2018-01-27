@extends('layouts.app')
@section('content')
<div class="row col-md-9 col-lg-9 col-sm-9 pull-left">
  <div class="col-md-12 col-lg-12 col-sm-12" style="background:white;margin:10px">
<ul class="list-group">
        <li class="list-group-item"><a href="{{ url('/api/tasks') }}">Show All Tasks</a></li>
        <li class="list-group-item"><a href="{{ url('/api/task') }}">Show a Specific Task</a></li>
        <li class="list-group-item"><a href="/api/task/create">create New Task</a></li>
        <li class="list-group-item"><a href="/api/task/update">Update Task</a></li>
        <li class="list-group-item"><a href="/api/task/delete">Delete a Specific Task</a></li>
  </ul>
</div>
  </div>

  <div class="row col-md-9 col-lg-9 col-sm-9 pull-left">
    <div class="col-md-12 col-lg-12 col-sm-12" style="background:white;margin:10px">
  <ul class="list-group">
          <li class="list-group-item"><a href="{{ url('/api/templates') }}">Show All Templates</a></li>
          <li class="list-group-item"><a href="{{ url('/api/template') }}">Show a Specific Template</a></li>
          <li class="list-group-item"><a href="/api/template/create">create New Template</a></li>
          <li class="list-group-item"><a href="/api/template/update">Update Template</a></li>
          <li class="list-group-item"><a href="/api/template/delete">Delete a Specific Template</a></li>
    </ul>
  </div>
    </div>

@endsection
