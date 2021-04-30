@extends('layouts.master')

@section('content')
<div class="movies">

    <section class="search-and-user">
        <form>
            <input type="search" placeholder="Search Pages...">
            <button type="submit" aria-label="submit form">
                <svg aria-hidden="true">
                    <use xlink:href="#search"></use>
                </svg>
            </button>
        </form>
        <div class="admin-profile">
            <span class="greeting">Hello admin</span>
            <div class="notifications">
                <span class="badge">1</span>
                <svg>
                    <use xlink:href="#users"></use>
                </svg>
            </div>
        </div>
    </section>
    <section class="add-section">
        <button class="btn add-btn"><a href="{{route('movie.create')}}">Create New Movie<i class="ml-2 fa fa-plus"></i></a></button>
    </section>
    <section class="serie-list">
       @foreach ($movies as $movie)
            <div class="serie-item" style="background-image: url('{{url('storage/images/'.$movie->country->country_name.'/['.$movie->code_no.'].jpg')}}')" alt="{{$movie->title}}" >
                <div class="title">
                    {{$movie->title}}
                </div>
                <div class="year">Year:{{$movie->year}}</div>

            </div>
       @endforeach
    </section>
    <div class="pagination-wrapper"><div>{{$movies->links()}}</div></div>
</div>
@endsection
