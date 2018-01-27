@extends('layouts.app')
@section('content')
<div class="row col-md-12 col-lg-12 col-sm-12 "  >
  <div class="col-md-9 col-lg-9 col-sm-9 " style="background:white;margin:10px">
      <div class="row " style="margin:10px">

<form method="POST" action="{{url('/api/template/delete')}}" role="form" >
{{ csrf_field() }}
{{ method_field('Delete')}}

<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="pkey" value="{{ $temps->pkey}}">

      <legend>Delete Template</legend>
      <p>You are about to remove This Template, Please confirm</p>

      <table class="table table-striped table hover">

      <tbody>
      <tr><td> Template Name</td><td>{{ $temps->name}}</td></tr>
      <tr><td>Template Type</td><td>{{ (isset($temps->body))?$temps->body:' ' }}</td></tr>
      <tr><td>Template Subject</td><td>{{ $temps->type}}</td></tr>
      <tr><td>description</td><td>{{ $temps->description }}</td></tr>
      <tr><td>creation Date</td><td>{{ date('Y-m-d ',$temps->created)}}</td></tr>

      </tbody>
      </table>
  <div class="form-group col-sm-5 col-lg-5 pull-right">
  <button type="submit"  class="btn btn-primary">Delete Template</button>
   </div>
    </form>
           </div>
             </div>
</div>
@endsection
