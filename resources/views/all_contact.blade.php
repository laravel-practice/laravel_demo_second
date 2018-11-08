@extends('layouts')
@section('content')
<h1>this is all contact</h1> 
<h3>using query builder</h3>


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
  	@foreach($AllContacts as $v_contacts)
    <tr>
      <th scope="row">{{ $v_contacts->id }}</th>
      <td>{{ $v_contacts->contact_name }}</td>
      <td>{{ $v_contacts->contact_email }}</td>
      <td>{{ $v_contacts->contact_phone }}</td>
      <td>
        <a href="{{ URL::to('edit-contact/'.$v_contacts->id ) }}" class="btn btn-warning">edit</a>
        <a href="{{ URL::to('show-contact/'.$v_contacts->id ) }}" class="btn btn-info">view</a>
        <a href="{{ URL::to('delete-contact/'.$v_contacts->id ) }}" class="btn btn-danger">delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
  {{$AllContacts->links()}} 

@endsection
