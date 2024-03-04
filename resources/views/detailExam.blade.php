@extends('layout')
@section('content')
    @foreach ($data as $value)
        <h2 style="text-align: center"> {{ $value->title }}</h2>
        {{-- <h4>#{{$value->subject}}</h4> --}}

        <div class="card-body">

            <div class="form-group">
                <p>{{ $value->q1 }}</p>
                <input type="text" name="a1" class="form-control">
                @if (Session::has('msg'))
                    <div class='alert'>
                        Đáp án: {{ $value->a1 }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <p>{{ $value->q2 }}</p>
                <input type="text" name="a2" class="form-control">
                @if (Session::has('msg'))
                    <div class='alert'>
                        Đáp án: {{ $value->a2 }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <p>{{ $value->q3 }}</p>
                <input type="text" name="a3" class="form-control">
                @if (Session::has('msg'))
                    <div class='alert'>
                        Đáp án: {{ $value->a3 }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <p>{{ $value->q4 }}</p>
                <input type="text" name="a4" class="form-control">
                @if (Session::has('msg'))
                    <div class='alert'>
                        Đáp án: {{ $value->a4 }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <p>{{ $value->q5 }}</p>
                <input type="text" name="a5" class="form-control">
                @if (Session::has('msg'))
                    <div class='alert'>
                        Đáp án: {{ $value->a5 }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <p>{{ $value->q6 }}</p>
                <input type="text" name="a6" class="form-control">
                @if (Session::has('msg'))
                    <div class='alert'>
                        Đáp án: {{ $value->a6 }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <p>{{ $value->q7 }}</p>
                <input type="text" name="a7" class="form-control">
                @if (Session::has('msg'))
                    <div class='alert'>
                        Đáp án: {{ $value->a7 }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <p>{{ $value->q8 }}</p>
                <input type="text" name="a8" class="form-control">
                @if (Session::has('msg'))
                    <div class='alert'>
                        Đáp án: {{ $value->a8 }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <p>{{ $value->q9 }}</p>
                <input type="text" name="a9" class="form-control">
                @if (Session::has('msg'))
                    <div class='alert'>
                        Đáp án: {{ $value->a9 }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <p>{{ $value->q10 }}</p>
                <input type="text" name="a10" class="form-control">
                @if (Session::has('msg'))
                    <div class='alert'>
                        Đáp án: {{ $value->a10 }}
                    </div>
                @endif
            </div>



        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary"> <a href="exam-result{{ $value->id }}" target="_blank">Đáp
                    Án</a></button>
        </div>
        @csrf
    @endforeach
@endsection
