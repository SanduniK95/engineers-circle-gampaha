@extends('layouts.admin-template')

@section('content')
  <form method="post" action="/admin/createproject/add">
    {{ csrf_field() }}
    <div class="container-fluid">
    <div class="form-group">
      <label for="projectName">Project Name</label>
      <input type="text" name="projectName" class="form-control" id="projectName" placeholder="Project Name" required>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" name="description" id="description" placeholder="Description" rows="3" required></textarea>
    </div>
    <div class="form-group">
      <label for="date">Date</label>
       <input type="text" name="date" class="date form-control" placeholder="Date" required>
    </div>  

    <div class="form-group">
      <label for="time">Time</label>
      <input type="text" name="time" class="form-control" id="time" placeholder="Time" required>
    </div>
    <div class="form-group">
      <label for="venue">Venue</label>
      <input type="text" name="venue" class="form-control" id="venue" placeholder="Venue" required>
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

