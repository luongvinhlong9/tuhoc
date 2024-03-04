@extends('main')
@section('content')
<h2 class="title text-center"> TÀI LIỆU NỔI BẬT </h2>
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
        @foreach (($info) as $list)
        @foreach ($documentsList as $document)

        @if($list->document_id===$document->id)
        @if ($document->status == 1)
        <tr>
            <th> <a href="view-documents{{$document->id}}" style="color: gray">{{ substr($document->name,0,50)}}... </th>
            <th> <a href="view-documents{{$document->id}}" style="color: gray">{{$document->subject}} </th>
            <th> <a href="view-documents{{$document->id}}" style="color: gray">{{$document->class}} </th>
            <th> <a href="view-documents{{$document->id}}" style="color: gray">{!! substr($document->content,0,50) !!}... </th>
            {{-- <th> <a href="detailDocument/{{$list->id}}" style="color: gray">{{$list->updated_at}} </th> --}}
          </tr>
          @endif
          @endif
        @endforeach
        @endforeach
    </tbody>
  </table>
@endsection
