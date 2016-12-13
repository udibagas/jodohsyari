@extends('layouts.user')

@section('title', $user->name)
@section('image', 'http://www.jodohsyari/'.$user->foto)
@section('imageSquare', 'http://www.jodohsyari/'.$user->foto)
@section('description', $user->profil)

@section('user-content')

<div class="panel panel-default">
    <div class="panel-heading">
        PROFIL SAYA
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3">
                @if ($user->foto)
                <img src="{{ $user->foto }}" alt="{{ $user->nama_lengkap }}" class="thumbnail img-responsive" title="{{ $user->nama_lengkap }}" />
                @else
                    <img src="/images/none.jpg" alt="{{ $user->nama_lengkap }}" class="thumbnail img-responsive" title="{{ $user->nama_lengkap }}" />
                @endif
            </div>
            <div class="col-md-9">
                <h2>{{ $user->name }}</h2>
                <hr>
                <blockquote cite="{{ $user->nama_panggilan }}">
                    <p>{{ $user->profile }}</p>
                </blockquote>
            </div>
        </div>

        include('user._detail')
    </div>
</div>

@endsection
