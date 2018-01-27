@extends('layouts.app')
@section('content')
<table class="table table-striped table hover">

<tbody>
<tr><td>Template Name</td><td>{{ $temps->name }}</td></tr>
<tr><td>Template body</td><td>{{ $temps->body }}</td></tr>
<tr><td> Type</td><td>
  @if($num == 'false')
  @switch($temps->type)
  @case(1)
      email
  @break
  @case(2)
  quote
  @break
  @case(3)
  contract
  @break
  @case(4)
  invoice
  @break
  @case(5)
  sms
  @break
  @endswitch

  @else
{{ ($temps->type) }}</td>
  @endif
</td></tr>
<tr><td>Description</td><td>{{ (isset($temps->description))?$temps->description:' ' }}</td></tr>
<tr><td> Subject</td><td>{{ (isset($temps->subject))?$temps->subject:' '}}</td></tr>

</tbody>
</table>

@endsection
