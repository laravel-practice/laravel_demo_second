@extends('layouts')
@section('content')
<h1>this is all contact MVC</h1> 


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($AllContactss as $b_contacts)
    <tr>
      <th scope="row">{{ $b_contacts->id }}</th>
      <td>{{ $b_contacts->name }}</td>
      <!-- here we use name not contact_name coz we already define in Contact model-->
      <td>{{ $b_contacts->email }}</td>
      <td>{{ $b_contacts->phone }}</td>
      <td>
        <a href="{{ URL::to('edit-contactMvc/'.$b_contacts->id ) }}" class="btn btn-warning">edit</a>
        <a href="{{ URL::to('show-contactMvc/'.$b_contacts->id ) }}" class="btn btn-info">view</a>
        <a href="{{ URL::to('delete-contactMvc/'.$b_contacts->id) }}" id="delete" class="btn btn-danger">delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
