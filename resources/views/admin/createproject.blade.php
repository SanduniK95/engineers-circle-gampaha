@extends('layouts.admin-template')

@section('content')
  <form>
    <div class="container-fluid">
    <div class="form-group">
      <label for="projectName">Project Name</label>
      <input type="text" name="projectName" class="form-control" id="projectName" placeholder="Project Name">
    </div>
    <div class="form-group">
      <label for="date">Date</label>
       <input class="date form-control" type="text" placeholder="Date">
    </div>  

    <div class="form-group">
      <label for="time">Time</label>
      <input type="text" name="time" class="form-control" id="time" placeholder="Time">
    </div>
    <div class="form-group">
      <label for="venue">Venue</label>
      <input type="text" name="venue" class="form-control" id="venue" placeholder="Venue">
    </div>
    <button type="submit" class="btn btn-primary">Create Project</button>
  </div>
  </form>

<script type="text/javascript">

    $('.date').datepicker({  

       format: 'dd-mm-yyyy'

     });  

</script> 

@endsection
