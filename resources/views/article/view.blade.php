@extends('layouts.main')

@section('content')
    <div class="row blog-entries element-animate fadeInUp element-animated">

        <div class="col-md-12 col-lg-8 main-content">
            <div class="post-meta">
                <span class="mr-2">{{ $article->updated_at }} </span>
            </div>
            <h1 class="mb-4">{{$article->title}}</h1>

            <div class="post-content-body">
                {!! $article->body !!}
            </div>
            <div class="post-content-body">
                {!! $article->user_id !!}
            </div>
        </div>

        <!-- END main-content -->

    </div>
@endsection
