@extends('layouts.admin-dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-login">
                <div class="card-header">Project Requests</div>

                <div class="card-body">
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Message</th>
                      </tr>
                    </thead>

                    <tbody>
                    @foreach($outsideProject as $row)
                      <tr>
                        <td>{{ $row['full_name'] }}</td>
                        <td>{{ $row['email'] }}</td>
                        <td>{{ $row['message'] }}</td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>

                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection