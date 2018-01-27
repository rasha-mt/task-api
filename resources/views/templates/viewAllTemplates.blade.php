@extends('layouts.app')
@section('content')
<table class="table table-striped table hover">
<thead>
<tr>
<th>Template Name</th>
<th>Template type</th>
<th>creation date</th>

</tr>
</thead>

<tbody>
  @if($temps != null)
@foreach($temps as $temp)

<tr><td><a href="/api/getTemplate/{{$temp->pkey}}">{{ $temp->name}}</a></td>
  <td>

    @switch($temp->type)
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

</td>


<td>{{  date('m/d/Y', $temp->created) }}</td></tr>

@endforeach
@endif
</tbody>
</table>

@endsection
