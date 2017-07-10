@extends('layouts.app')

@section('content')
    <div class="container">
    <table border="1">
        <tr>
            <td>Категорія</td>
            <td>Назва товару</td>
            <td>Код</td>
            <td>Ціна</td>
            <td>Фото</td>
            <td>Характеристики</td>
        </tr>
        <tr>
            <td>{{$product->category}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->code}}</td>
            <td> {{$product->price}}</td>
            <td>{{$product->photo}}</td>
            <td>{{$product->characteristics}}</td>
        </tr>
    </table>
        <br />
       <a class="btn btn-primary"  href="/edit/{{$product->id}}">Змінити </a>
        <a class="btn btn-primary"  href="/delete/{{$product->id}}">Видалити </a>
    </div>
@endsection