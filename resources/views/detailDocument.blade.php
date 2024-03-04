@extends('layout')
@section('content')
    @foreach ($info as $value)
        <h2 style="text-align: center"> {{ $value->name }}</h2>
        <h4>#{{ $value->subject }} {{ $value->class }}</h4>
        {!! $value->content !!}
        <hr>
        {{-- <form method="post" action="/favorite{{ $value->id }}{{ Auth::user()->id }}">
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"> Thêm vào yêu thích</button>
            </div>
        </form> --}}
    @endforeach
@endsection
