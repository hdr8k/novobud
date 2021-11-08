@extends('layouts.app')

@section('content')
    @include('buildings.parts.header')
    @include('buildings.parts.filter', ['categories' => $categories])
    @include('buildings.parts.content', ['houses' => $houses, 'page' => $page])
    @include('buildings.parts.footer')
@endsection
