@extends('layout')
@section('content')
@foreach ($info as $value)
    <h2 style="text-align: center"> {{$value->user_name}}</h2>

    <h4>#{{$value->subject}}</h4>



    <p>{!! $value->content !!} </p>
    <small> {{$value->created_at}}</small>
    <hr>
    <div class="report" style="float: right">
        <form action="forum-view" method="POST" autocomplete="off">
            <div class="form-group" hidden>
                <input type="text" name="post_id" class="form-control" value="{{ $value->id }}" hidden>
            </div>
            <div class="form-group" hidden>
                <input type="text" name="reporter_id" class="form-control" value="{{ Auth::user()->id }}" hidden>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Báo cáo</button>
            </div>
        </form>
    </div>
@endforeach
@endsection
