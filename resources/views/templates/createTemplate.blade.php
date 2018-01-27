@extends('layouts.app')
@section('content')
<div class="row col-md-12 col-lg-12 col-sm-12 "  >
  <div class="col-md-9 col-lg-9 col-sm-9 " style="background:white;margin:10px">
      <div class="row " style="margin:10px">
<form method="POST" action="{{url('/api/template/create')}}" role="form" >
{{ csrf_field() }}
<input type="hidden" name="_method" value="POST">


      <legend>Create New Template</legend>
      <div class="form-group col-sm-10 col-lg-10">
      <label for=""  class="form-group col-sm-3 col-lg-3 col-md-3" >Template Name: <span class="required">*</span></label>
       <div class="col-sm-8 col-lg-8">
      <input  type="text"  class="form-control  " required name="name" value="">
        </div>
      </div>

      <div class="row">
          <div class="form-group col-sm-10 col-lg-10">
          <label for=""  class="form-group col-sm-3 col-lg-3 col-md-3" >Template Body: <span class="required">*</span></label>
           <div class="col-sm-8 col-lg-8">
             <textarea    class="form-control autosize-target text-left" required
                    style="resize:vertical"  rows="5" name="body"
                    spellcheck="false" autofocus=""> </textarea>  </div>
          </div>

          <div class="row">
              <div class="form-group col-sm-10 col-lg-10">
              <label for=""  class="form-group col-sm-3 col-lg-3 col-md-3" >Template Type: <span class="required">*</span></label>
               <div class="col-sm-8 col-lg-8">
              <input  type="text"  class="form-control" required name="type" value="">
                </div>
              </div>

  <br/>
  <div class="form-group col-sm-10 col-lg-10">
    <label for=""  class="form-group col-sm-3 col-lg-3 col-md-3" >template subject: <span class="required">*</span></label>
   <div class="col-sm-8 col-lg-8">
  <input class="date form-control" type="text"  name="subject" required value="">
  </div>
  </div>

  <div class="form-group col-sm-10 col-lg-10">
    <label for=""  class="form-group col-sm-3 col-lg-3 col-md-3" >template description: <span class="required">*</span></label>
   <div class="col-sm-8 col-lg-8">
  <input class="date form-control" type="text"  name="description" required value="">
  </div>
  </div>


  <div class="form-group col-sm-5 col-lg-5 pull-right">
  <button type="submit"  class="btn btn-primary">Create Template</button>
   </div>
    </form>
           </div>
             </div>
</div>
@endsection
