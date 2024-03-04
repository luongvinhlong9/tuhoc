@extends('main')
@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
<form action="/user/update" method="POST">
    @foreach ($info as $value)
        <div class="card-body">
            <div class="form-group">
                <input type="text" name="id" class="form-control" value="{{ $value->id }}", hidden="">
            </div>
            <div class="form-group">
                <label for="menu">Tên</label>
                <input type="text" name="name" class="form-control" value="{{ $value->name }}">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input name='email' id="email" readonly="True" class="form-control" value="{{ $value->email }}">
            </div>

            <div class="form-group">
                <label>Trạng thái</label>
                <input name='status' id="status" readonly="True" class="form-control" value="{{ $value->status }}">
            </div>

            <div class="form-group">
                <label>Thời gian tạo</label>
                <input name='created_at' id="created_at" readonly="True" class="form-control"
                    value="{{ $value->created_at }}">
            </div>
        </div>
    @endforeach

    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
    </div>
    @csrf
</form>
@endsection
