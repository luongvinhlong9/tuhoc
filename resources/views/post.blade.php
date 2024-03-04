@extends('layout')
@section('content')
    @if (Session::has('msg'))
    <div class='alert'>
        {{session::get('msg')}}
    </div>
    @endif
    <div class="card-footer">

        @if (Auth::check())
            <form method="get" action="create-post">
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"> <a href="/create-post"></a>Viết bài</button>
                </div>
            </form>
        @else
            {{-- <button style="background: orange; border: 10%; border: solid orange;"><a href="/login"></i>Đăng bài </a></button> --}}
            <form method="get" action="/login">
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Viết bài</button>
                </div>
            </form>
        @endif
    </div>


    @foreach ($data as $value)
        <div>
            <a href="forum-view{{ $value->id }}" style="color: gray">
                <h3 hidden>{{ $value->id }}</h3>
                @if ( $value->user_id ===1)
                <h3 style="color:red"> {{ $value->user_name }}</h3>
                @else
                <h3> {{ $value->user_name }}</h3>
                @endif

                @if ($value->subject)
                    <h4> #{{ $value->subject }} </h4>
                @else
                    <h4> #Khác </h4>
                @endif

                <p>{!! substr($value->content, 0, 80) !!}...</p>
                <small>{{ $value->created_at }}</small>
            </a>
            <hr>
        </div>
    @endforeach
@endsection
