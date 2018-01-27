@extends('layouts.app')
@section('content')
<div class="row col-md-12 col-lg-12 col-sm-12 "  >
  <div class="col-md-9 col-lg-9 col-sm-9 " style="background:white;margin:10px">
      <div class="row " style="margin:10px">

<form method="POST" action="{{url('/api/task/update')}}" role="form" >
{{ csrf_field() }}
{{ method_field('PUT')}}

<input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="pkey" value="{{ $task->pkey}}">

      <legend>Update Task</legend>
      <div class="form-group col-sm-10 col-lg-10">
      <label for=""  class="form-group col-sm-3 col-lg-3 col-md-3" >Task Name: <span class="required">*</span></label>
       <div class="col-sm-8 col-lg-8">
      <input  type="text"  class="form-control  " required name="name" value="{{ $task->name}}">
        </div>
      </div>

    <!-- <div class="row">
          <div class="form-group col-sm-10 col-lg-10">
          <label for=""  class="form-group col-sm-3 col-lg-3 col-md-3" >Task Notes: <span class="required">*</span></label>
           <div class="col-sm-8 col-lg-8">
             <textarea    class="form-control autosize-target text-left" required
                    style="resize:vertical"  rows="5" name="notes"
                    spellcheck="false" autofocus=""> {{ $task->notes}}</textarea>  </div>
          </div>-->

          <div class="row">
              <div class="form-group col-sm-10 col-lg-10">
              <label for=""  class="form-group col-sm-3 col-lg-3 col-md-3" >list name: <span class="required">*</span></label>
               <div class="col-sm-8 col-lg-8">
              <input  type="text"  class="form-control  " required name="list" value="{{ $task->list}}">
                </div>
              </div>

<br/>
<div class="form-group col-sm-10 col-lg-10">
    <label for=""  class="form-group col-sm-3 col-lg-3 col-md-3" >select due to date: <span class="required">*</span></label>
   <div class="col-sm-8 col-lg-8">
<input class="date form-control" type="date"  name="due" required value="{{ $task->due}}">
  </div>
</div>

  <div class="form-group col-sm-5 col-lg-5 pull-right">
  <button type="submit"  class="btn btn-primary">Update Task</button>
   </div>
    </form>
           </div>
             </div>
</div>
@endsection
