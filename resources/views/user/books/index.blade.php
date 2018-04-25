@extends('layouts.admin')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    @include('user.books.partials.header')

    <h2>Список книг</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Название кнги</th>
                    <th>Автор</th>
                    <th>Действие</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($books as $key => $book)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$book->name}}</td>
                    <td class="w-75">{{$book->author}}</td>
                    <td class="text-right">
                        <form action="{{route('user.book.destroy', $book)}}" method="post">
                            {{ method_field('delete') }} {{ csrf_field() }}

                            <a class="btn btn-sm btn-outline-primary" href="{{route('user.book.edit', $book)}}">
                                <span data-feather="edit-2"></span>
                            </a>

                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                <span data-feather="x"></span>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                    <h2>Книги отстствуют</h2>
                @endforelse
            </tbody>
        </table>
    </div>
</main>
@endsection
