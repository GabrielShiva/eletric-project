@extends('layouts.app')

@section('title', 'Home')

@section('content')

@foreach ($projects as $project)
    <h2><a href='{{route('project.show', ['project' => $project->id])}}'>{{$project->title}}</a></h2> <hr>
@endforeach

@endsection
