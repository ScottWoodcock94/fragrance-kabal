@extends('layouts.layout')

@section('title', 'Products')
<h1>{{$title}}</h1>

@foreach ($products as $product)
    <x-product />
@endforeach
