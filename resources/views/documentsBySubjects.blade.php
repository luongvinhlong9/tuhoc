@extends('layout')
@section('content')
<h2 class="title text-center"> KẾT QUẢ </h2>
<table class="table" style="font-size: 17px; ">
    <thead>
      <tr style="color: orange">
        <th> Tiêu đề tài liệu </th>
        <th> Môn học </th>
        <th> Lớp</th>
        <th> Nội dung</th>
        {{-- <th> Chỉnh sửa cuối </th> --}}
      </tr>
    </thead>
    <tbody>
        @foreach (($data) as $list)
        @if ($list->status == 1)
        <tr>
            <th> <a href="view-documents{{$list->id}}" style="color: gray">{{ substr($list->name,0,50)}}... </th>
            <th> <a href="view-documents{{$list->id}}" style="color: gray">{{$list->subject}} </th>
            <th> <a href="view-documents{{$list->id}}" style="color: gray">{{$list->class}} </th>
            <th> <a href="view-documents{{$list->id}}" style="color: gray">{!! substr($list->content,0,50) !!}... </th>
            {{-- <th> <a href="detailDocument/{{$list->id}}" style="color: gray">{{$list->updated_at}} </th> --}}
          </tr>
          @endif
        @endforeach
    </tbody>
  </table>
@endsection
