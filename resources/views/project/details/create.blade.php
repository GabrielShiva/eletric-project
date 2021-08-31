@extends('layouts.app')

@section('title', 'Project Details')

@section('content')

<h1>Project Details</h1>

<form action='{{route('project.details.store', ['project' => $project->id])}}' method='post'>
    @csrf
    <input type='text' name='room' placeholder='Room'>
    <input type='text' name='width' placeholder='Width'>
    <input type='text' name='length' placeholder='Length'>
    <button type='submit'>Create Project</button>
</form>

@endsection
