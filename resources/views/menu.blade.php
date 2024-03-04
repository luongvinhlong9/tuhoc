
<div class="row">
    <div class="col-sm-9">
        {{-- <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div> --}}
        <div class="mainmenu pull-left">
            <ul class="nav navbar-nav collapse navbar-collapse">
                <li><a href="/" class="active">Trang chủ</a></li>
                <li class="dropdown"><a href="#">Tài liệu<i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="sub-menu">
                        @foreach ($subjectsList as $subject)
                            <li name="{{ $subject->name }}"><a href="/documents-{{ $subject->name }}">{{ $subject->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="/exam">Kiểm tra</a></li>
                <li><a href="/forum">Diễn đàn</a></li>
            </ul>
        </div>
    </div>
    <div class="col-sm-3">
        <form action=""  class="form-inline">
        <div class="search_box pull-right">
            <input type="text" name="key" placeholder="Tìm kiếm" />
        </div>
        </form>
    </div>
</div>
</div>

