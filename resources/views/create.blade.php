@extends('layouts.app')
@section('content')
    <div class="container">
        <form class="form-horizontal" method="POST" action='/store'>
            <label class="control-label">Категорія</label>
            <input type="text" class="form-control"  name="category" required>
            <label class="control-label">Назва товару</label>
            <input type="text" class="form-control"  name="name" required>
            <label class="control-label">Код</label>
            <input type="text" class="form-control"  name="code" required>
            <label class="control-label">Ціна</label>
            <input type="text" class="form-control"  name="price" required>
            <label class="control-label">Фото</label><br />
            <a class="btn btn-primary" name="photo"  href="/upload">Завантажити </a><br />
            <label class="control-label">Характеристики</label>
            <input type="text" class="form-control"  name="characteristics">
            <input type="hidden" value="{{csrf_token()}}">
            <br />
            <input class="btn btn-primary" type="submit" value="Додати">
        </form>
    </div>
@endsection