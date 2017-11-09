@extends('layouts.site')

@section('content')

    <section id="blog-section">
        <div class="container">
            <div class="row">

                <form action="{{ route('articleStore') }}" method="post" enctype="multipart/form-data" id="form-1">
                    <div class="form-group">
                        <label for="title">Заголовок</label>
                        <input type="text" class="form-control" id="title" name="title">

                        <label for="content">Текст</label>
                        <textarea type="text" class="form-control" id="content" name="content"></textarea>

                        <label for="img">Фото</label>
                        <input type="file" class="form-control" id='img' name="img">

                    </div>
                    <button type="submit" class="btn btn-primary" name="articleAdd">Добавить статью</button>

                    {{ csrf_field() }}
                </form>

            </div>
        </div>
    </section>


@endsection