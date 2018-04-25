@extends('layouts.admin')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    @include('admin.genres.partials.header')

    <h2>Список жанров</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Название жанра</th>
                    <th>Описание</th>
                    <th>Действие</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($genres as $key => $genre)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$genre->name}}</td>
                    <td class="w-75">{{$genre->description}}</td>
                    <td class="text-right">
                        <form action="{{route('admin.genre.destroy', $genre)}}" method="post">
                            {{ method_field('delete') }} {{ csrf_field() }}

                            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.genre.edit', $genre)}}">
                                <span data-feather="edit-2"></span>
                            </a>

                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                <span data-feather="x"></span>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                    <h2>Жанры отстствуют</h2>
                @endforelse
            </tbody>
        </table>
    </div>
</main>
@endsection
