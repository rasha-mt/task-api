@extends('layouts.app')
@section('content')
<div class="row col-md-9 col-lg-9 col-sm-9 pull-left"  >
  <div class="col-md-12 col-lg-12 col-sm-12" style="background:white;margin:10px">

<form method="POST" action="{{url('/api/task/update')}}" role="form" >

  {{ csrf_field() }}

  <legend>choose Task</legend>
      <div class="form-group">
      <label for="" >Task Name<span class="required">*</span></label>
      <select name="task_id" class="form-control" required="required">
        <option> Select Task</option>
        @foreach( $tasks as $task )
        <option value="{{ $task->pkey }}"> {{ $task->name }}</option>
        @endforeach
      </select>
      </div>

  <div class="form-group">
  <button type="submit"  class="btn btn-primary">Update Task</button>
   </div>
    </form>
           </div>
             </div>

@endsection
