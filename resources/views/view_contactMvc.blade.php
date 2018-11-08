@extends('layouts')
@section('content')
<a href="{{ URL::to('All_ContactMvc') }}" class="btn btn-success">view all contacts</a>


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
      <td>{{ $single_data->name }}</td>
      <td>{{ $single_data->email }}</td>
      <td>{{ $single_data->phone }}</td>
  </tbody>
</table>

@endsection
