@extends('layouts.app')
@section('content')
<table class="table table-striped table hover">
<thead>
<tr>
<th>Name</th>
<th>Note</th>
<th>List Name</th>
<th>created</th>
<th>Due To</th>
</tr>
</thead>

<tbody>
  @if($tasks != null)
@foreach($tasks as $task)
<tr>
    <td><a href="/api/getTask/{{$task->pkey}}">{{ $task->name}}</a></td>
    <td>{{ (isset($task->notes))?$task->notes:' ' }}</td>
    <<td>{{ $task->list }}</td>
    <td>{{ date('Y-m-d ',$task->created)}}</td>
    <td>{{ date('Y-m-d ',$task->due)}}</td>
</tr>
@endforeach
@endif
</tbody>
</table>

@endsection
