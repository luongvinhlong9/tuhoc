@extends('admin.main')
@section('content')

  <form method="get" action="./add-document">
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Thêm tài liệu</button>
    </div>
  </form>
  <table class="table">
    <thead>
      <tr>
        <th> ID </th>
        <th> Tiêu đề tài liệu </th>
        <th> Môn học </th>
        <th> Lớp</th>
        <th> Trạng thái</th>
        <th> Chỉnh sửa cuối </th>
        <th> Thao tác</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($list as $row)
      <tr>
        <th> {{$row->id}} </th>
        <th> {{$row->name}} </th>
        <th> {{$row->subject}} </th>
        <th> {{$row->class}} </th>
        <th> @if ($row->status)
          <p>Hoạt động</p>
          @else
          <p>Vô hiệu</p>
        @endif </th>
        <th> {{$row->updated_at}} </th>
        <th><div class="card-footer">
          <button type="submit" name="detail" class="btn btn-primary" style="width: 60px; background: green; border: solid green"><a href="/admin/documents/detail/{{$row->id}}"><p style="font-weight: bold; color: white">XEM</p></button>
          <button type="submit" name="edit" class="btn btn-primary" style="width: 60px; background: orange; border: solid orange"><a href="/admin/documents/edit/{{$row->id}}"><p style="font-weight: bold; color: white">SỬA</p></button>
          <button type="submit" name="delete" class="btn btn-primary" style="width: 60px; background: red; border: solid red"><a href="delete/{{$row->id}}"><p style="font-weight: bold; color: white">XÓA</p></button>

        </div></th>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
