@extends('layouts.site')

@section('content')
    <section id="blog-section">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="row" id="list">

                        @foreach($articleList as $article)
                            <div class="col-lg-4 col-md-4 article">
                                <aside>
                                    <?php if (!empty($articlesItem['img'])) : ?>
                                    <img src="../../<?php echo $articlesItem['img'] ?>" class="img-responsive">
                                    <?php endif; ?>
                                    <div class="content-title">
                                        <div class="text-center">
                                            <h3>
                                                <a data-toggle="modal" href="#modal-1" class='previewArticle'
                                                   data-id="{{ $article->id }}"> {!! $article->title !!}</a>
                                            </h3>
                                            <h5>
                                                {!! $article->content !!}
                                            </h5>
                                        </div>
                                    </div>


                                </aside>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection