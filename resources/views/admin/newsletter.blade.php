<!-- Sachintha -->

@extends('layouts.admin-template')
@section('content')

@if(session('status'))
<div class="containner">
        {{session('status')}}
@endif

<div class="container">
<h3>Subscribe to Newsletter</h3>
<div class="row">
<!-- newsletter subscription form -->
<form action="{{url('admin/newsletter')}}" method="post">
{{csrf_field()}}
    <div class="form group">
        <label for ="exampleInputEmail"> Email</label><br>
        <input type="email" name="user_email" class="form-control">

    <div>
    
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>

@endsection('content')
