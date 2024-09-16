@extends('layouts.main')

@section('content')

    <div class="row blog-entries">
        <div class="col-md-12 col-lg-8 main-content">
            <div class="row mb-5 mt-5">

                <div class="col-md-12">

                    @foreach ($articles as $article)
                        <div class="post-entry-horzontal">
                            <a href="{{route('view', [ $article->id])}}">
                                <span class="text">
                                    <div class="post-meta">
                                        <span class="mr-2">{{$article->title}}</span> • Author :
                                        <span class="mr-2">{{ $article->user_id }} </span>

                                    </div>
                                </span>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    {{$articles->links('vendor.pagination.custom')}}
                    {{-- <nav aria-label="Page navigation" class="text-center">
                        <ul class="pagination">
                            <li class="page-item  active"><a class="page-link" href="#">&lt;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">&gt;</a></li>
                        </ul>
                    </nav> --}}
                </div>
            </div>



        </div>

        <!-- END main-content -->

    </div>
@endsection
