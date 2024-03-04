@extends('admin.main')

@section('content')
    <form action="" method="POST" >

    <div class="card-body">
      <div class="form-group">
        <label for="menu">Tên môn</label>
        <input type="text" name="name" class="form-control" placeholder="Nhập tên môn">
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
      <button type="submit" class="btn btn-primary">Thêm môn</button>
    </div>
    @csrf
  </form>
@endsection
@section('footer')
    <script>CKEDITOR.replace('content') </script>
@endsection

