@extends('layouts.register')

@section('form')
    @include('kontak._form', ['method' => 'PUT', 'url' => '/kontak'])
@endsection
