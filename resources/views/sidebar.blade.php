<h2>Môn học</h2>
{{-- {{dd($menus)}} --}}
<div class="panel-group category-products" id="accordian">
    <!--category-productsr-->

    @foreach ($subjectsList as $subject)
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a href="/documents-{{ $subject->name }}">
                    {{$subject->name}}
                </a>
            </h4>
        </div>
    </div>

    @endforeach
</div>
<!--/category-products-->


