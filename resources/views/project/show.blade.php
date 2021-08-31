@extends('layouts.app')

@section('title', 'Project')

@section('content')

<h1>{{$project->title}}</h1>

@foreach ($project->details as $detail)
    <p><strong>Room:</strong> {{$detail->room}}</p>
    <p><strong>Width:</strong> {{$detail->width}}</p>
    <p><strong>Length:</strong> {{$detail->length}}</p>
    <p><strong>Area:</strong> {{$detail->area}}</p>
    <p><strong>Perimeter:</strong> {{$detail->perimeter}}</p>
    <hr>
@endforeach

<a href='{{route('project.details.create', ['project' => $project->id])}}'>Add Rooms</a>

@endsection
