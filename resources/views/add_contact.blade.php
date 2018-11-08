@extends('layouts')
@section('content')

<h1>with the help of query builder</h1>
<div class="box-content">
		<form class="form-horizontal" action="{{ url('insert-contact') }}" method="POST">
			@csrf
			<!--{{ csrf_field() }}-->
			<fieldset>
			  
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Name</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="name">
				</div>
			  </div>

			  <div class="control-group">
				<label class="control-label" for="focusedInput">Email Address</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="email">
				</div>
			  </div>

			  <div class="control-group">
				<label class="control-label" for="focusedInput">Mobile Number</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="phone">
				</div>
			  </div>

			  
			  <div class="form-actions">
				<button type="submit" class="btn btn-primary">Add Contact</button>
			  </div>
			</fieldset>
		  </form>
	
	</div>
	<hr>
	<h1>with the help of query builder and toaster alert</h1>

<div class="box-content">
		<form class="form-horizontal" action="{{ url('insert-contact-alert') }}" method="POST">
			@csrf
			<!--{{ csrf_field() }}-->
			<fieldset>
			  
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Name</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="name">
				</div>
			  </div>

			  <div class="control-group">
				<label class="control-label" for="focusedInput">Email Address</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="email">
				</div>
			  </div>

			  <div class="control-group">
				<label class="control-label" for="focusedInput">Mobile Number</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="phone">
				</div>
			  </div>

			  
			  <div class="form-actions">
				<button type="submit" class="btn btn-primary">Add Contact</button>
			  </div>
			</fieldset>
		  </form>
	
	</div>


	<hr>
	<h1> using mvc pattern best practice</h1>

<div class="box-content">
		<form class="form-horizontal" action="{{ url('insert-contact-mvc') }}" method="POST">
			@csrf
			<!--{{ csrf_field() }}-->
			<fieldset>
			  
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Name</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="name">
				</div>
			  </div>

			  <div class="control-group">
				<label class="control-label" for="focusedInput">Email Address</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="email">
				</div>
			  </div>

			  <div class="control-group">
				<label class="control-label" for="focusedInput">Mobile Number</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="phone">
				</div>
			  </div>

			  
			  <div class="form-actions">
				<button type="submit" class="btn btn-primary">Add Contact</button>
			  </div>
			</fieldset>
		  </form>
	
	</div>


@endsection
