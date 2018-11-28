@extends('layouts.admin-dashboard')

@section('content')
<h2 style="margin-left:30px; margin-top:10px;margin-bottom:30px;">Create Project</h2>
<div class=block>
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
    <br>
    <button type="submit" class="btn btn-primary">Create Project</button>  
    </div>
  </form>
</div>
<script type="text/javascript">

    $('.date').datepicker({  

       format: 'dd-mm-yyyy'

     });  

</script> 
<style>
  .block{
      margin:auto;
      width:600px;
      height:550px;
      padding: 30px;
      border: 1px white;
      
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  
</style>
@endsection

