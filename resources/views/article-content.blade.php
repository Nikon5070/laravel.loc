@extends('layouts.site')

@section('content')
    <section id="blog-section">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="row" id="list">


                        <div class="col-lg-4 col-md-4 article">
                            <aside>
                                <?php if (!empty($articlesItem['img'])) : ?>
                                <img src="../../<?php echo $articlesItem['img'] ?>" class="img-responsive">
                                <?php endif; ?>
                                <div class="content-title">
                                    <div class="text-center">
                                        <p>{{ $article->id }}</p>
                                        <p>{{ $article->title }}</p>
                                        <p>{{ $article->content }}</p>
                                    </div>
                                </div>


                            </aside>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection