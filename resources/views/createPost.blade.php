@extends('layout')
{{-- @section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection --}}
@section('content')
    <form action="" method="POST" autocomplete="off">

        <div class="card-body">
            <div class="form-group" hidden>
                <input type="text" name="user_name" class="form-control" value="{{ Auth::user()->name }}" >
            </div>

            <div class="form-group" hidden>
                <input type="text" name="user_id" class="form-control" value="{{ Auth::user()->id }}">
            </div>

            <div class="form-group">
                <label>Nội dung</label>
                <textarea name='content' id="content" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label>Chủ đề</label>
                <select class="form-control" name="subject">
                    @foreach ($subjectsList as $value)
                        <option value="{{ $value->name }}">{{ $value->name }}</option>
                    @endforeach
                    <option value="Khác">Khác</option>
                </select>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Đăng bài</button>
        </div>
        @csrf
    </form>
@endsection
{{-- @section('footer')
    <script>
        CKEDITOR.replace('content')
    </script>
@endsection --}}
