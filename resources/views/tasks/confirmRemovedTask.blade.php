@extends('layouts.app')
@section('content')
<div class="row col-md-12 col-lg-12 col-sm-12 "  >
  <div class="col-md-9 col-lg-9 col-sm-9 " style="background:white;margin:10px">
      <div class="row " style="margin:10px">

<form method="POST" action="{{url('/api/task/delete')}}" role="form" >
{{ csrf_field() }}
{{ method_field('Delete')}}

<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="pkey" value="{{ $tasks->pkey}}">

      <legend>Delete Task</legend>
      <p>You are about to remove This Task, Please confirm</p>

      <table class="table table-striped table hover">

      <tbody>
      <tr><td>Name</td><td>{{ $tasks->name}}</td></tr>
      <tr><td>Note</td><td>{{ (isset($tasks->notes))?$task->notes:'no notes' }}</td></tr>
      <tr><td>List Name</td><td>{{ $tasks->list}}</td></tr>
      <tr><td>created</td><td>{{ date('Y-m-d ',$tasks->created)}}</td></tr>
      <tr><td>Due To</td><td>{{ date('Y-m-d ',$tasks->created)}}</td></tr>

      </tbody>
      </table>
  <div class="form-group col-sm-5 col-lg-5 pull-right">
  <button type="submit"  class="btn btn-primary">Delete Task</button>
   </div>
    </form>
           </div>
             </div>
</div>
@endsection
