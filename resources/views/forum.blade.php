@extends('layout')
@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <div class="post">
        <h3>Name</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, vitae quidem. Obcaecati ullam eius voluptas
            pariatur assumenda nemo? Rem, eaque dolorem? Molestias ratione, dolores culpa eaque itaque esse fugit autem.</p>
        <hr>
        <form action="" method="POST" autocomplete="off">
            <div class="form-group">
                <label>Bình luận</label>
                <textarea name='content' id="content" class="form-control"></textarea>
            </div>
            <div class="card-footer">
      <button type="submit" class="btn btn-primary">Đăng</button>
    </div>
        </form>
    </div>
@endsection
