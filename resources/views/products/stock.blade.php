@extends('index')
@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="row">
			<h3>Add Stock</h3>
			<form class="form-horizontal" action"/" method="POST">
				{{ csrf_field() }}

				<div class="form-group">
					<div class="col-lg-12">
						<input type="text" name="product_name" placeholder="Product Name:">
					</div>
				</div>

				<div class="form-group">
					<div class="col-lg-12">
						<input type="text" name="quantity" placeholder="Quantity in stock:">
					</div>
				</div>

				<div class="form-group">
					<div class="col-lg-12">
						<input type="text" name="price" placeholder="Price/Item:">
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-12">
						<button type="submit" class="btn btn-lg btn-primary">Submit</button>
						<button class="btn btn-lg btn-default">Cancel</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@stop