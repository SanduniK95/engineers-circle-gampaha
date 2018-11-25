@extends('layouts.admin-template')
@section('content')

<form action="{{url('create')}}" method="POST">
  {!!csrf_field()!!}
  <div class="form-group">
    <label for="Subject">Subject</label>
    <input type="text" class="form-control" id="subject" name="subject" >

    
  </div>
  <div class="form-group">
    <label for="receptionistName">Receptionist Name</label>
    <input type="text" class="form-control" id="receptionistName" name="receptionistName" >

    
  </div>
  <div class="form-group">
    <label for="receptionistEmail">Receptionist Email</label>
    <input type="email" class="form-control" id="receptionistEmail" name="receptionistEmail" >

    
  </div>

  <div class="form-group">
    <label for="content">Content</label>
    <input type="textarea" class="form-control" id="content" name="content" cols="30" rows="20" >

    
  </div>
  <div class="form-group">
    <label for="senderName">Sender Name</label>
    <input type="text" class="form-control" id="senderName" name="senderName" >

    
  </div>
  <div class="form-group">
    <label for="senderEmail">Sender Email</label>
    <input type="email" class="form-control" id="senderEmail" name="senderEmail">

    
  </div>

  <div class="form-group">
    <label for="senderEmail">Chose image</label>
    
 
    <input type="file" class="custom-file-input" id="inputGroupFile03" name="file">
    
</div>
<div class="form-group">
    <label for="img_caption">image caption</label>
    <input type="text" class="form-control" id="imgcaption" name="imgcaption" >

    
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@endsection('content')