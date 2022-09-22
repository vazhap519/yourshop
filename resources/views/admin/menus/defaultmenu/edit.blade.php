@extends('layouts.adminbase')
@section('content')

	<h6 class="mb-4">მენიუს შექმნა</h6>
	<form role="form" action="{{route('menu_store')}}" method="POST">
		@csrf
		<div class="mb-3">
			<label for="menuname" class="form-label">მენიუს რედაქტირება</label>
			<input type="text" class="form-control" id="menuname" name="name">

		</div>
		<div class="mb-3">
			<label for="link" class="form-label">მენიუს ლინკი</label>
			<input type="text" class="form-control" id="link" name="link">
		</div>
		<div class="mb-3">
			<label for="floatingSelect" class="form-label">მენიუს ჩართვა</label>
			<select class="form-select" id="floatingSelect"
					name="status">
						<option value="1">true</option>
						<option value="0">false</option>
			</select>
		</div>
		<button type="submit" class="btn btn-primary">მენიუს კატეგორიის რედაქტირება</button>
	</form>

@endsection