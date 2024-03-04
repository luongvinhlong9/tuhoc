@extends('admin.main')
@section('content')

  <form method="get" action="./add-question">
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Tạo đề kiểm tra</button>
    </div>

  </form>

  <table class="table">
    <thead>
      <tr>
        <th> ID </th>
        <th> Tiêu đề </th>
        <th> Môn học </th>
        <th> Trạng thái </th>
        <th> Cập nhật </th>
        <th> Thao tác</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($list as $value)
      <tr>
        <th> {{$value->id}} </th>
        <th> {{$value->title}} </th>
        <th>
          @foreach ($subjectsList as $subject)
          @if($subject->id ===  $value->id_subject)
          {{$subject->name}}
          @endif
      @endforeach</th>
        <th>
          @if ($value->status)
          <p>Hoạt động</p>
          @else
          <p>Vô hiệu</p>
        @endif </th>
        <th> {{$value->updated_at}} </th>
        <th><div class="card-footer">
            <button type="submit" name="detail" class="btn btn-primary" style="width: 60px; background: blue; border: solid blue"><a href="detail/{{$value->id}}">Xem </a></button>
            <button type="submit" name="edit" class="btn btn-primary" style="width: 60px; background: orange; border: solid orange"><a href="edit/{{$value->id}}">Sửa</button>
            <button type="submit" name="delete" class="btn btn-primary" style="width: 60px; background: red; border: solid red"><a href="delete/{{$value->id}}">Xóa</button>
        </div></th>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
