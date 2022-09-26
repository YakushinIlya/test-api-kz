@extends('layouts.app')

@section('content')
    <div class="col-lg-8">
        <form class="row contact_form" action="{{route('film.update', ['film'=>$film['id']])}}" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-12">
                <div class="form-group mb-5">
                    <label>Название фильма</label>
                    <input type="text" class="form-control" id="head" name="head" value="{{$film['head']}}">
                </div>
                <div class="form-group mb-5">
                    <label>Постер фильма</label>
                    <input type="file" class="form-control" id="poster" name="poster">
                </div>
                <div class="form-group mb-5">
                    <label>Жанр фильма</label>
                    <select class="form-control" id="categories" name="categories[]" multiple>
                        @foreach($categories as $category)
                            <option value="{{$category['id']}}">{{$category['id']}}) {{$category['head']}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-12 text-right">
                <button type="submit" value="submit" class="btn submit_btn">Добавить фильм</button>
            </div>
        </form>
    </div>
@endsection
