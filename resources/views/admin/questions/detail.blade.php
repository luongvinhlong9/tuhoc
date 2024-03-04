@extends('admin.main')

@section('content')
@foreach ($data as $value)

    <h3>{{ $value->title }}</h3>
    <div class="card-body">

        <div class="form-group">
            <p>{{ $value->q1 }}</p>
            <p>
                Đáp án: {{ $value->a1 }}
            </p>
            <hr>
        </div>

        <div class="form-group">
            <p>{{ $value->q2 }}</p>

            <p>
                Đáp án: {{ $value->a2 }}
            </p><hr>
        </div>

        <div class="form-group">
            <p>{{ $value->q3 }}</p>

            <p>
                Đáp án: {{ $value->a3 }}
            </p><hr>
        </div>

        <div class="form-group">
            <p>{{ $value->q4 }}</p>

            <p>
                Đáp án: {{ $value->a4 }}
            </p><hr>
        </div>

        <div class="form-group">
            <p>{{ $value->q5 }}</p>

            <p>
                Đáp án: {{ $value->a5 }}
            </p><hr>
        </div>

        <div class="form-group">
            <p>{{ $value->q6 }}</p>

            <p>
                Đáp án: {{ $value->a6 }}
            </p><hr>
        </div>

        <div class="form-group">
            <p>{{ $value->q7 }}</p>

            <p>
                Đáp án: {{ $value->a7 }}
            </p><hr>
        </div>

        <div class="form-group">
            <p>{{ $value->q8 }}</p>

            <p>
                Đáp án: {{ $value->a8 }}
            </p><hr>
        </div>

        <div class="form-group">
            <p>{{ $value->q9 }}</p>

            <p>
                Đáp án: {{ $value->a9 }}
            </p><hr>
        </div>

        <div class="form-group">
            <p>{{ $value->q10 }}</p>

            <p>
                Đáp án: {{ $value->a10 }}
            </p><hr>
        </div>



    </div>
    @endforeach
@endsection
