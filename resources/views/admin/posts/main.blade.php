@extends('admin.main')
@section('content')



  <table class="table">
    <thead>
      <tr>
        <th> ID </th>
        <th> Nội dung </th>
        <th> Tác giả </th>
        <th> Trạng thái </th>
        <th> Cập nhật </th>
        <th> Thao tác</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($list as $value)
      <tr>
        <th> {{$value->id}} </th>
        <th> {{$value->content}} </th>
        <th> {{$value->user_name}} </th>
        <th> @if ($value->status)
          <p>Hoạt động</p>
          @else
          <p>Vô hiệu</p>
        @endif </th>
        <th> {{$value->updated_at}} </th>
        <th><div class="card-footer">
          <button type="submit" name="edit" class="btn btn-primary" style="background: orange; border: solid orange">Sửa</button>
          <button type="submit" name="delete" class="btn btn-primary" style="background: red; border: solid red"> <a href="delete/{{$value->id}}">Xóa</button>
        </div></th>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
