@extends('admin.main')

@section('content')
    @foreach ($result as $value)
    <form action="/admin/questions/update" method="POST">
    <div class="form-group">

        <h2> Tiêu đề</h2>
        <input type="text" name="a1" class="form-control" value="{{ $value->title }} ">

    </div>
    <hr>
        <div class="card-body">

            <div class="form-group">
                <textarea name='q1' id="q1" class="form-control">{{ $value->q1 }}</textarea>
                <label> Đáp án </label>
                <input type="text" name="a1" class="form-control" value="{{ $value->a1 }} ">

            </div>
            <hr>

            <div class="form-group">
                <textarea name='q2' id="q2" class="form-control">{{ $value->q2 }}</textarea>
                <label> Đáp án </label>
                <input type="text" name="a2" class="form-control" value="{{ $value->a2 }} ">

            </div>
            <hr>

            <div class="form-group">
                <textarea name='q3' id="q3" class="form-control">{{ $value->q3 }}</textarea>
                <label> Đáp án </label>
                <input type="text" name="a3" class="form-control" value="{{ $value->a3 }} ">

            </div>
            <hr>

            <div class="form-group">
                <textarea name='q4' id="q4" class="form-control">{{ $value->q4 }}</textarea>
                <label> Đáp án </label>
                <input type="text" name="a4" class="form-control" value="{{ $value->a4 }} ">

            </div>
            <hr>

            <div class="form-group">
                <textarea name='q5' id="q5" class="form-control">{{ $value->q5 }}</textarea>
                <label> Đáp án </label>
                <input type="text" name="a5" class="form-control" value="{{ $value->a5 }} ">

            </div>
            <hr>

            <div class="form-group">
                <textarea name='q6' id="q6" class="form-control">{{ $value->q6 }}</textarea>
                <label> Đáp án </label>
                <input type="text" name="a6" class="form-control" value="{{ $value->a6 }} ">

            </div>
            <hr>

            <div class="form-group">
                <textarea name='q7' id="q7" class="form-control">{{ $value->q7 }}</textarea>
                <label> Đáp án </label>
                <input type="text" name="a7" class="form-control" value="{{ $value->a7 }} ">

            </div>
            <hr>

            <div class="form-group">
                <textarea name='q8' id="q8" class="form-control">{{ $value->q8 }}</textarea>
                <label> Đáp án </label>
                <input type="text" name="a8" class="form-control" value="{{ $value->a8 }} ">

            </div>
            <hr>

            <div class="form-group">
                <textarea name='q1' id="q9" class="form-control">{{ $value->q9 }}</textarea>
                <label> Đáp án </label>
                <input type="text" name="a9" class="form-control" value="{{ $value->a9 }} ">

            </div>
            <hr>

            <div class="form-group">
                <textarea name='q10' id="q10" class="form-control">{{ $value->q10 }}</textarea>
                <label> Đáp án </label>
                <input type="text" name="a10" class="form-control" value="{{ $value->a10 }} ">

            </div>
            <hr>

        </div>
    @endforeach
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
    </div>
    @csrf
</form>
@endsection
