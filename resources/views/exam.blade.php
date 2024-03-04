@extends('layout')
@section('content')
<h2 class="title text-center"> CÁC ĐỀ SẴN CÓ </h2>
<table class="table" style="font-size: 17px; ">
    <thead>
      <tr style="color: orange">
        <th> STT </th>
        <th> Tiêu đề </th>
        <th> Môn học </th>
        <th> Chỉnh sửa cuối</th>
        {{-- <th> Chỉnh sửa cuối </th> --}}
      </tr>
    </thead>
    <tbody>
        <label hidden>{{$count=0}}</label>
        @foreach (($data) as $list)
        @if ($list->status == 1)

        <tr>
            <th> <a href="view-exam{{$list->id}}" style="color: gray">{{$count+=1}}</th>
            <th> <a href="view-exam{{$list->id}}" style="color: gray">{{$list->title}} </th>
            <th> <a href="view-exam{{$list->id}}" style="color: gray">
                @foreach ($subjectsList as $subject)
                    @if($subject->id ===  $list->id_subject)
                    <a href="view-exam{{$list->id}}" style="color: gray">{{$subject->name}} </a>
                    @endif
                @endforeach
            </th>
            <th> <a href="view-exam{{$list->id}}" style="color: gray">{{$list->updated_at}} </th>
            {{-- <th> <a href="detailDocument/{{$list->id}}" style="color: gray">{{$list->updated_at}} </th> --}}
          </tr>
          @endif
        @endforeach
    </tbody>
  </table>
@endsection
