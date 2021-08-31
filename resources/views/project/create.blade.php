@extends('layouts.app')

@section('title', 'New Project')

@section('content')

<form action='{{route('project.store')}}' method='post'>
    @csrf
    <input type='text' name='title' placeholder='Title of the project'>
    <button type='submit'>Create Project</button>
</form>

@endsection
