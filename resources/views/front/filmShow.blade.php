@extends('layouts.app')

@section('content')
    <div class="col-lg-8">
        @if(!empty($film))
            <div class="main_blog_details">
                <img class="img-fluid" src="/uploads/poster/{{$film['poster']}}" alt="">
                <a href="#">
                    <h4>{{$film['head']}}</h4>
                </a>
                {{--$film['body']--}}
                <div class="row">
                    <div class="col-6">
                        <form action="{{route('film.destroy', ['film'=>$film['id']])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Удалить</button>
                        </form>
                    </div>
                    <div class="col-6">
                        <form action="{{route('film.edit', ['film'=>$film['id']])}}" method="get">
                            @csrf
                            @method('GET')
                            <button class="btn btn-warning">Редактировать</button>
                        </form>
                    </div>
                </div>
                <div class="news_d_footer">
                    <a href="#"><i class="lnr lnr lnr-heart"></i>Lily and 4 people like this</a>
                    <a class="justify-content-center ml-auto" href="#"><i class="lnr lnr lnr-bubble"></i>06
                        Comments</a>
                    <div class="news_socail ml-auto">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-rss"></i></a>
                    </div>
                </div>
            </div>
        @endif

        <div class="navigation-area">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                    <div class="thumb">
                        <a href="#"><img class="img-fluid" src="img/blog/prev.jpg" alt=""></a>
                    </div>
                    <div class="arrow">
                        <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                    </div>
                    <div class="detials">
                        <p>Prev Post</p>
                        <a href="#">
                            <h4>A Discount Toner</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                    <div class="detials">
                        <p>Next Post</p>
                        <a href="#">
                            <h4>Cartridge Is Better</h4>
                        </a>
                    </div>
                    <div class="arrow">
                        <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                    </div>
                    <div class="thumb">
                        <a href="#"><img class="img-fluid" src="img/blog/next.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
