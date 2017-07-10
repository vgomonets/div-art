@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="form-horizontal" method="POST" action='/update/{{$product->id}}'>
            <label class="control-label">Категорія</label>
            <input type="text" class="form-control"  name="category" value="{{$product->category}}">
            <label class="control-label">Назва товару</label>
            <input type="text" class="form-control"  name="name" value="{{$product->name}}">
            <label class="control-label">Код</label>
            <input type="text" class="form-control"  name="code" value="{{$product->code}}">
            <label class="control-label">Ціна</label>
            <input type="text" class="form-control"  name="price" value="{{$product->price}}">
            <label class="control-label">Фото</label>
            <input type="text" class="form-control"  name="photo" value="{{$product->photo}}">
            <label class="control-label">Характеристики</label>
            <input type="text" class="form-control"  name="characteristics" value="{{$product->characteristics}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input class="btn btn-primary" type="submit" value="Змінити">
        </form>
    </div>
@endsection