@extends('admin.main')
@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <form action="" method="POST" >

    <div class="card-body">
      <div class="form-group">
        <label for="menu">Tên môn</label>
        <input type="text" name="menu" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên môn">
      </div>

      <div class="form-group">
        <label>Danh mục</label>
        <select class="form-control" name="parents_id">
            <option value="0">Danh mục cha</option>
        </select>
      </div>

      <div class="form-group">
        <label>Mô tả</label>
        <textarea name='description' class="form-control"></textarea>
      </div>

      <div class="form-group">
        <label>Chi tiết </label>
        <textarea name='content' id="content" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <div class="form-group">
            <label>Trạng thái</label>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
              <label for="active" class="custom-control-label">Có</label>
            </div>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" >
              <label for="no_active" class="custom-control-label">Không</label>
            </div>
          </div>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Thêm môn</button>
    </div>
  </form>
@endsection

@section('footer')
    <script>CKEDITOR.replace('content')</script>
@endsection
