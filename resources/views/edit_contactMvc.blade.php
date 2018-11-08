@extends('layouts')
@section('content')

<h1>with the help of query builder</h1>
<div class="box-content">
		<form class="form-horizontal" action="{{ url('update-contactMvc/'.$single_data->id) }}" method="POST">
			@csrf
			<!--{{ csrf_field() }}-->
			<fieldset>
			  
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Name</label>
				<div class="controls">
				  <input class="input-xlarge focused" value="{{ $single_data->name }}" type="text" name="name">
				</div>
			  </div>

			  <div class="control-group">
				<label class="control-label" for="focusedInput">Email Address</label>
				<div class="controls">
				  <input class="input-xlarge focused" value="{{ $single_data->email }}" type="text" name="email">
				</div>
			  </div>

			  <div class="control-group">
				<label class="control-label" for="focusedInput">Mobile Number</label>
				<div class="controls">
				  <input class="input-xlarge focused" value="{{ $single_data->phone }}" type="text" name="phone">
				</div>
			  </div>

			  
			  <div class="form-actions">
				<button type="submit" class="btn btn-primary">Update Contact</button>
			  </div>
			</fieldset>
		  </form>
	
	</div>
@endsection
