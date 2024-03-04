@extends('admin.main')

@section('content')
@foreach ($info as $value)
    <h2 style="text-align: center"> {{$value->name}}</h2>
    <h4>#{{$value->subject}} {{$value->class}}</h4>
    {!! $value->content !!}
@endforeach
@endsection
