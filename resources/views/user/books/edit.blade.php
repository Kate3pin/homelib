@extends('layouts.admin')
@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    @include('user.books.partials.header')
    <h3>Редактирование книги</h3>
    <div>
        <form action="{{route('user.book.update', $book)}}" method="post">
            {{ method_field('put')}}
            {{ csrf_field() }}
            @include('user.books.partials.form')
        </form>
    </div>
</main>

@endsection
