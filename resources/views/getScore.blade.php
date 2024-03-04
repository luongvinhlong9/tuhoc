@extends('layout')
@section('content')
@foreach ($data as $value)
{{-- @foreach ($request as $submit) --}}


    <h2 style="text-align: center"> Đáp án cho {{$value->title}}</h2>
    {{-- <h4>#{{$value->subject}}</h4> --}}

        <div class="card-body">

          <div class="form-group">
            <p>{{$value->q1}}</p>
            {{-- <h4> Câu trả lời của bạn: {{$submit->a1}} --}}
            <h4> Đáp án: {{$value->a1}}
          </div>

          <div class="form-group">
            <p>{{$value->q2}}</p>
            {{-- <h4> Câu trả lời của bạn: {{$submit->a2}} --}}
            <h4> Đáp án: {{$value->a2}}
          </div>

          <div class="form-group">
            <p>{{$value->q3}}</p>
            {{-- <h4> Câu trả lời của bạn: {{$submit->a3}} --}}
            <h4> Đáp án: {{$value->a3}}
          </div>

          <div class="form-group">
            <p>{{$value->q4}}</p>
            {{-- <h4> Câu trả lời của bạn: {{$submit->a4}} --}}
            <h4> Đáp án: {{$value->a4}}
          </div>

          <div class="form-group">
            <p>{{$value->q5}}</p>
            {{-- <h4> Câu trả lời của bạn: {{$submit->a5}} --}}
            <h4> Đáp án: {{$value->a5}}
          </div>

          <div class="form-group">
            <p>{{$value->q6}}</p>
            {{-- <h4> Câu trả lời của bạn: {{$submit->a6}} --}}
            <h4> Đáp án: {{$value->a6}}
          </div>

          <div class="form-group">
            <p>{{$value->q7}}</p>
            {{-- <h4> Câu trả lời của bạn: {{$submit->a7}} --}}
            <h4> Đáp án: {{$value->a7}}
          </div>

          <div class="form-group">
            <p>{{$value->q8}}</p>
            {{-- <h4> Câu trả lời của bạn: {{$submit->a8}} --}}
            <h4> Đáp án: {{$value->a8}}
          </div>

          <div class="form-group">
            <p>{{$value->q9}}</p>
            {{-- <h4> Câu trả lời của bạn: {{$submit->a9}} --}}
            <h4> Đáp án: {{$value->a9}}
          </div>

          <div class="form-group">
            <p>{{$value->q10}}</p>
            {{-- <h4> Câu trả lời của bạn: {{$submit->a10}} --}}
            <h4> Đáp án: {{$value->a10}}
          </div>



        </div>
        <!-- /.card-body -->
{{-- @endforeach --}}
@endforeach
@endsection
