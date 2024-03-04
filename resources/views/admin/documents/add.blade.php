@extends('admin.main')
@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <form action="" method="POST" autocomplete="off">

    <div class="card-body">
      <div class="form-group">
        <label for="menu">Tiêu đề tài liệu</label>
        <input type="text" name="name" class="form-control" placeholder="Nhập tiêu đề">
      </div>

      <div class="form-group">
        <label>Nội dung</label>
        <textarea name='content' id="content" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <label>Môn học</label>
        <select class="form-control" name="subject">
            @foreach ($listSubject as $value)
              <option value="{{$value->name}}">{{$value->name}}</option>
            @endforeach
        </select>
      </div>

      <div class="form-group">
        <label>Lớp</label>
        <select class="form-control" name="class">
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
      </div>


      <div class="form-group">
        <div class="form-group">
            <label>Trạng thái</label>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
              <label for="active" class="custom-control-label">Kích hoạt</label>
            </div>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" >
              <label for="no_active" class="custom-control-label">Vô hiệu</label>
            </div>
          </div>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Thêm tài liệu</button>
    </div>
    @csrf
  </form>
@endsection
@section('footer')
    <script>CKEDITOR.replace('content') </script>
@endsection


