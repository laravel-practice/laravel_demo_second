@extends('layouts')
@section('content')
<a href="{{ route('all.contact') }}" class="btn btn-success">view all contacts</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{ $single_data->id }}</th>
      <td>{{ $single_data->contact_name }}</td>
      <td>{{ $single_data->contact_email }}</td>
      <td>{{ $single_data->contact_phone }}</td>
  </tbody>
</table>

@endsection
