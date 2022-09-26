@extends('layouts.app')

@section('content')
<div class="col-lg-8">
    <div class="row">
        @foreach($films as $film)
            <div class="col-lg-12">
                <div class="single_travel wow fadeInUp" data-wow-duration="1s">
                    <figure>
                        <img class="img-fluid w-100" src="/uploads/poster/{{$film['poster']}}" alt="">
                    </figure>
                    <div class="overlay"></div>
                    <div class="text-wrap">
                        <h3>
                            <a href="{{route('film.show', ['film'=>$film['id']])}}">{{$film['head']}}</a>
                        </h3>
                        <div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
                            <div class="meta">
                                <a href="{{route('film.show', ['film'=>$film['id']])}}">
                                    <span class="icon fa fa-calendar"></span> {{$film['created_at']}}
                                </a>
                            </div>
                            <div>
                                <a class="read_more" href="{{route('film.show', ['film'=>$film['id']])}}">Смотреть</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-lg-12">
            <nav class="blog-pagination justify-content-center d-flex">
                {!! $films->links('pagination.custom') !!}
            </nav>
        </div>
    </div>
</div>
@endsection
