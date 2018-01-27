@extends('layouts.app')
@section('content')
<table class="table table-striped table hover">

<tbody>
<tr><td>Name</td><td>{{ $tasks->name}}</td></tr>
<tr><td>Note</td><td>{{ (isset($tasks->notes))?$tasks->notes:' ' }}</td></tr>
<tr><td>List Name</td><td>{{ $tasks->list}}</td></tr>
<tr><td>created</td><td>{{ date('Y-m-d ',$tasks->created)}}</td></tr>
<tr><td>Due To</td><td>{{ date('Y-m-d ',$tasks->created)}}</td></tr>

</tbody>
</table>

@endsection
