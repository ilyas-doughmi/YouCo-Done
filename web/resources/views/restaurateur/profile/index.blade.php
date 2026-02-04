@extends('layouts.restaurateur')

@section('header')
    Profile
@endsection

@section('content')


@auth
<h1>hello  {{ Auth::user()->name }}</h1>
@endauth

@endsection

