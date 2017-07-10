@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            @foreach($products as $product)
                <li><a href="/show/{{$product->id}}">{{$product->name}}</a></li>
            @endforeach
        </ul>
    </div>
@endsection