@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif

<div class="form-group row">
  <label class="col-sm-2 col-form-label" for="name">Название жанра</label>
  <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="name" value="@if(old('name')){{old('name')}}@else{{$genre->name or ""}}@endif" required>
  </div>
</div>

<div class="form-group row">
  <label class="col-sm-2 col-form-label" for="description">Описание жанра</label>
  <div class="col-sm-10">
      <textarea class="form-control" name="description" id="description" required>@if(old('description')){{old('description')}}@else{{$genre->description or ""}}@endif</textarea>
  </div>
</div>

<hr />
<div class="text-right">
    <input class="btn btn-sm btn-primary" type="submit" value="Сохранить">
    <a class="btn btn-sm btn-outline-danger" href="{{ route('admin.genre.index') }}">Отмена</a>
</div>
