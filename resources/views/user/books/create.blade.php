@extends('layouts.admin')
@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    @include('user.books.partials.header')
    <h3>Создать книгу</h3>
    <div>
        <form action="{{route('user.book.store')}}" method="post">
            {{ csrf_field() }}
            @include('user.books.partials.form')
        </form>
    </div>
</main>

@endsection
