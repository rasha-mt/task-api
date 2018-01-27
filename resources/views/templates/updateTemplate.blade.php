@extends('layouts.app')
@section('content')
<div class="row col-md-12 col-lg-12 col-sm-12 "  >
  <div class="col-md-9 col-lg-9 col-sm-9 " style="background:white;margin:10px">
      <div class="row " style="margin:10px">

<form method="POST" action="{{url('/api/template/update')}}" role="form" >
{{ csrf_field() }}
{{ method_field('PUT')}}

<input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="pkey" value="{{ $temp->pkey}}">

      <legend>Update Template</legend>
      <div class="form-group col-sm-10 col-lg-10">
      <label for=""  class="form-group col-sm-3 col-lg-3 col-md-3" >Template Name: <span class="required">*</span></label>
       <div class="col-sm-8 col-lg-8">
      <input  type="text"  class="form-control  " required name="name" value="{{ $temp->name}}">
        </div>
      </div>

      <div class="row">
          <div class="form-group col-sm-10 col-lg-10">
          <label for=""  class="form-group col-sm-3 col-lg-3 col-md-3" >Template Body: <span class="required">*</span></label>
           <div class="col-sm-8 col-lg-8">
             <textarea    class="form-control autosize-target text-left" required
                    style="resize:vertical"  rows="5" name="body"
                    spellcheck="false" autofocus=""> {{ $temp->body}}</textarea>  </div>
          </div>

          <div class="row">
              <div class="form-group col-sm-10 col-lg-10">
              <label for=""  class="form-group col-sm-3 col-lg-3 col-md-3" >Template Type: <span class="required">*</span></label>
               <div class="col-sm-8 col-lg-8">
              <input  type="text"  class="form-control  " required name="type" value="{{ $temp->type}}">
                </div>
              </div>

<br/>
<div class="form-group col-sm-10 col-lg-10">
    <label for=""  class="form-group col-sm-3 col-lg-3 col-md-3" >template subject: <span class="required">*</span></label>
   <div class="col-sm-8 col-lg-8">
<input class="date form-control" type="text"  name="subject" required value="{{ $temp->subject}}">
  </div>
</div>

<div class="form-group col-sm-10 col-lg-10">
    <label for=""  class="form-group col-sm-3 col-lg-3 col-md-3" >template description: <span class="required">*</span></label>
   <div class="col-sm-8 col-lg-8">
<input class="date form-control" type="text"  name="description" required value="{{ $temp->description}}">
  </div>
</div>

  <div class="form-group col-sm-5 col-lg-5 pull-right">
  <button type="submit"  class="btn btn-primary">Update Template</button>
   </div>
    </form>
           </div>
             </div>
</div>
@endsection
