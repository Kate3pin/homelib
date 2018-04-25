@extends('layouts.admin')
@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    @include('admin.genres.partials.header')
    <h3>Создать жанр</h3>
    <div>
        <form action="{{route('admin.genre.store')}}" method="post">
            {{ csrf_field() }}
            @include('admin.genres.partials.form')
        </form>
    </div>
</main>

@endsection
