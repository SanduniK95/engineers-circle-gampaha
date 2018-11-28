@extends('layouts.admin-dashboard')

@section('content')
    <div class="container-fluid">
        @foreach($projects as $project)
        <span class="block">
        <div>
            <h2 style="color:darkgreen">{{ $project->project_name}}</h2>
        
        </div>
        <div>{{ $project->description}}</div><br>
        <div>
            <label>Date:</label>{{ $project->date}}
        </div>
        <div>
            <label>Time:</label>{{ $project->time}}
        </div>
        <div>
            <label>Venue:</label>{{ $project->venue}}
        </div>  
    </span> 
        @endforeach
    </div>
<style>
    span.block{
        display: inline-block;
        width:450px;
        height:400px;
        vertical-align:top;
        padding: 30px;
        margin: 20px;
        border: 1px white;
        background-color: whitesmoke;
        outline-color: lightskyblue;
        outline-width: 1px;
        outline-style: inset;
    }
</style>
@endsection