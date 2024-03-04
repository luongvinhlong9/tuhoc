@extends('admin.main')
@section('content')

  <form method="get" action="./add-user">

  </form>
  <table class="table">
    <thead>
      <tr>
        <th> ID </th>
        <th> Tên </th>
        <th> Email </th>
        <th> Phân Quyền</th>
        <th> Trạng thái</th>
        <th> Ngày tạo </th>
        <th> Thao tác</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($list as $row)
      <tr>
        <th> {{$row->id}} </th>
        <th> {{$row->name}} </th>
        <th> {{$row->email}} </th>
        <th> @if ($row->role)
            <p>Quản trị</p>
            @else
            <p>Người dùng chung</p>
          @endif </th>
        <th> @if ($row->status)
          <p>Hoạt động</p>
          @else
          <p>Vô hiệu</p>
        @endif </th>
        <th> {{$row->created_at}} </th>
        <th> {{$row->updated_at}} </th>
        <th><div class="card-footer" style="width: 230px;">
          <button type="submit" name="edit" class="btn btn-primary" style="width: 60px; background: orange; border: solid orange"><a href="/admin/users/edit/{{$row->id}}">Sửa</button>
          <button type="submit" name="editStatus" class="btn btn-primary" style="width: 80px; background: red; border: solid red"><a href="edit-status/{{$row->id}}">Khóa</button>
        </div></th>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
