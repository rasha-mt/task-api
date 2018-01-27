@extends('layouts.app')
@section('content')
<div class="row col-md-9 col-lg-9 col-sm-9 pull-left"  >
  <div class="col-md-12 col-lg-12 col-sm-12" style="background:white;margin:10px">

<form method="POST" action="{{url('/api/template')}}" role="form" >

  {{ csrf_field() }}

  <legend>choose Template</legend>
      <div class="form-group">
      <label for="" >Template Name<span class="required">*</span></label>
      <select name="temp_id" class="form-control" required="required">
        <option> Select Template</option>

        @foreach($temps as $temp)
        <option value="{{ $temp->pkey }}"> {{ $temp->name }}</option>
        @endforeach
      </select>
      </div>

  <div class="form-group">
  <button type="submit"  class="btn btn-primary">view Template</button>
   </div>
    </form>
           </div>
             </div>

@endsection
