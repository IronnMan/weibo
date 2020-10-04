@extends('layouts.app')
@section('title', $user->name)

@section('content')
<a href="{{ route('users.show', $user->id) }}">
    <img src="{{ $user->gravatar('140')}}" alt="{{ $user->name }}" class="gravatar">
</a>
<h1>{{ $user->name }} - {{ $user->email }}</h1>
@stop