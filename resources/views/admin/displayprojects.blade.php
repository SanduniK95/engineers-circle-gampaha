@extends('layouts.admin-dashboard')

@section('content')
    <div class="container-fluid">
        @foreach($projects as $project)
        <span class="block">
        <div>
            <h3 style="color:darkgreen;text-align:center">{{ $project->project_name}}</h3>
        
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
        height:300px;
        vertical-align:top;
        padding: 10px;
        padding-left: 20px;
        margin: 20px;
        border: 1px white;
        background-color: whitesmoke;
        /*outline-color: white;
        outline-width: 1px;
        outline-style: inset;*/
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
</style>
@endsection