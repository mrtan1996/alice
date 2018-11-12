@extends('admin.master')
@section('content')
@foreach($tickets as $ticket)
{{$ticket->title}}

@endforeach
@endsection