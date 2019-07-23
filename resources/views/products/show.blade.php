@extends('layouts.app')

@section('content')

  <div class="container">
    <h2>Prodotto: {{ $product->id }}</h2>
    <ul>
      <li>Name: {{ $product->name }}</li>
      <li>Description: {{ $product->description }}</li>
      <li>Price: {{ $product->price }}</li>
    </ul>
  </div>


@endsection
