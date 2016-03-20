@extends('index')
@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="row">
			<h3>Add Stock</h3>
			<form class="form-horizontal" id="add_product" action="/add" method="POST">
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
<div class="row">
	<div class="col-lg-12" id="results">
		
	</div>
</div>
<script type="text/javascript">
$('#add_product').submit(function(e){
	e.preventDefault();

	$.ajax({
		url: '/add',
		type: 'POST',
		data: $('#add_product').serialize(),
		dataType: 'JSON',
		success: function(data){
			//console.log(data);
			$('#results').append(
				'<span class="col-lg-12">'+data.name+' | '+data.quantity+' | '+data.price+' | 1 March 2016 </span>'
			);
		}
	});
});
</script>
@stop